<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DeleteAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 */
class DeleteAnomalyDetectorRequest extends Request
{
    /**
     * @param array{AnomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
