<?php

namespace Sunaoka\Aws\Structures\Connect\CreateQuickConnect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW' $QuickConnectType
 * @property UserQuickConnectConfig|null $UserConfig
 * @property QueueQuickConnectConfig|null $QueueConfig
 * @property PhoneNumberQuickConnectConfig|null $PhoneConfig
 * @property FlowQuickConnectConfig|null $FlowConfig
 */
class QuickConnectConfig extends Shape
{
    /**
     * @param array{
     *     QuickConnectType: 'USER'|'QUEUE'|'PHONE_NUMBER'|'FLOW',
     *     UserConfig?: UserQuickConnectConfig|null,
     *     QueueConfig?: QueueQuickConnectConfig|null,
     *     PhoneConfig?: PhoneNumberQuickConnectConfig|null,
     *     FlowConfig?: FlowQuickConnectConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
