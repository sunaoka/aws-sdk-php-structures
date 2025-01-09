<?php

namespace Sunaoka\Aws\Structures\SesV2\ListSuppressedDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property 'BOUNCE'|'COMPLAINT' $Reason
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 */
class SuppressedDestinationSummary extends Shape
{
    /**
     * @param array{
     *     EmailAddress: string,
     *     Reason: 'BOUNCE'|'COMPLAINT',
     *     LastUpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
