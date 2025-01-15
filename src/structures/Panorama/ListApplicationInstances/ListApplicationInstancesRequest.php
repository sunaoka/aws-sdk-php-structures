<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeviceId
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NextToken
 * @property 'DEPLOYMENT_SUCCEEDED'|'DEPLOYMENT_ERROR'|'REMOVAL_SUCCEEDED'|'REMOVAL_FAILED'|'PROCESSING_DEPLOYMENT'|'PROCESSING_REMOVAL'|'DEPLOYMENT_FAILED'|null $StatusFilter
 */
class ListApplicationInstancesRequest extends Request
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     MaxResults?: int<0, 25>|null,
     *     NextToken?: string|null,
     *     StatusFilter?: 'DEPLOYMENT_SUCCEEDED'|'DEPLOYMENT_ERROR'|'REMOVAL_SUCCEEDED'|'REMOVAL_FAILED'|'PROCESSING_DEPLOYMENT'|'PROCESSING_REMOVAL'|'DEPLOYMENT_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
