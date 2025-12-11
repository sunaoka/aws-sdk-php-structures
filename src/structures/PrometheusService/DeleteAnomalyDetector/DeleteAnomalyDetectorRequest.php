<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $anomalyDetectorId
 * @property string|null $clientToken
 */
class DeleteAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     anomalyDetectorId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
