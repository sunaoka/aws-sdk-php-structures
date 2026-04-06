<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ANOMALY_DETECTION'|null $computationModelType
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListComputationModelsRequest extends Request
{
    /**
     * @param array{
     *     computationModelType?: 'ANOMALY_DETECTION'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
