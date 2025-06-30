<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InvokedAfter'|'InvokedBefore'|'Target'|'Owner'|'Status'|'SessionId'|'AccessType' $key
 * @property string $value
 */
class SessionFilter extends Shape
{
    /**
     * @param array{
     *     key: 'InvokedAfter'|'InvokedBefore'|'Target'|'Owner'|'Status'|'SessionId'|'AccessType',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
