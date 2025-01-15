<?php

namespace Sunaoka\Aws\Structures\SesV2\GetSuppressedDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property 'BOUNCE'|'COMPLAINT' $Reason
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property SuppressedDestinationAttributes|null $Attributes
 */
class SuppressedDestination extends Shape
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     Reason: 'BOUNCE'|'COMPLAINT',
     *     LastUpdateTime: \Aws\Api\DateTimeResult,
     *     Attributes?: SuppressedDestinationAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
