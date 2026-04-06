<?php

namespace Sunaoka\Aws\Structures\Connect\ListQuickConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'USER'|'QUEUE'|'PHONE_NUMBER'|null $QuickConnectType
 */
class QuickConnectSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     QuickConnectType?: 'USER'|'QUEUE'|'PHONE_NUMBER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
