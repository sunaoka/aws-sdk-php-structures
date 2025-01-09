<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeObservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObservationId
 * @property string $AccountId
 */
class DescribeObservationRequest extends Request
{
    /**
     * @param array{
     *     ObservationId: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
