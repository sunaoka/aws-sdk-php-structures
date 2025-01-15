<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'QUEUE'|'PHONE_NUMBER' $QuickConnectType
 * @property UserQuickConnectConfig|null $UserConfig
 * @property QueueQuickConnectConfig|null $QueueConfig
 * @property PhoneNumberQuickConnectConfig|null $PhoneConfig
 */
class QuickConnectConfig extends Shape
{
    /**
     * @param array{
     *     QuickConnectType: 'USER'|'QUEUE'|'PHONE_NUMBER',
     *     UserConfig?: UserQuickConnectConfig|null,
     *     QueueConfig?: QueueQuickConnectConfig|null,
     *     PhoneConfig?: PhoneNumberQuickConnectConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
