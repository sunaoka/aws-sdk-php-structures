<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyGroupId
 * @property string $AnomalyDetectorArn
 */
class GetAnomalyGroupRequest extends Request
{
    /**
     * @param array{
     *     AnomalyGroupId: string,
     *     AnomalyDetectorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
