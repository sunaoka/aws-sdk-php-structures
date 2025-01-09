<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property 'PUBLIC'|'PRIVATE' $Connectivity
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     Connectivity: 'PUBLIC'|'PRIVATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
