<?php

namespace Aligent\AsyncEventsBundle\Async\Topic;

class WebhookEntityCreateTopic extends \Oro\Component\MessageQueue\Topic\AbstractTopic
{
    public const NAME = 'aligent.webhook.entity.create';

    public static function getName(): string
    {
        return self::NAME;
    }
    public static function getDescription(): string
    {
        // TODO: Implement getDescription() method.
        return '';
    }
    public function configureMessageBody(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
        // TODO: Implement configureMessageBody() method.
    }
}
