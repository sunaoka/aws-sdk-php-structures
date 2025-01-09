<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQuickConnectConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'QUEUE'|'PHONE_NUMBER' $QuickConnectType
 * @property UserQuickConnectConfig $UserConfig
 * @property QueueQuickConnectConfig $QueueConfig
 * @property PhoneNumberQuickConnectConfig $PhoneConfig
 */
class QuickConnectConfig extends Shape
{
    /**
     * @param array{
     *     QuickConnectType: 'USER'|'QUEUE'|'PHONE_NUMBER',
     *     UserConfig?: UserQuickConnectConfig,
     *     QueueConfig?: QueueQuickConnectConfig,
     *     PhoneConfig?: PhoneNumberQuickConnectConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
