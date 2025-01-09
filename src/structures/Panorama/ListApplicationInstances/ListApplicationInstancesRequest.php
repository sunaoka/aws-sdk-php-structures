<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property int<0, 25> $MaxResults
 * @property string $NextToken
 * @property 'DEPLOYMENT_SUCCEEDED'|'DEPLOYMENT_ERROR'|'REMOVAL_SUCCEEDED'|'REMOVAL_FAILED'|'PROCESSING_DEPLOYMENT'|'PROCESSING_REMOVAL'|'DEPLOYMENT_FAILED' $StatusFilter
 */
class ListApplicationInstancesRequest extends Request
{
    /**
     * @param array{
     *     DeviceId?: string,
     *     MaxResults?: int<0, 25>,
     *     NextToken?: string,
     *     StatusFilter?: 'DEPLOYMENT_SUCCEEDED'|'DEPLOYMENT_ERROR'|'REMOVAL_SUCCEEDED'|'REMOVAL_FAILED'|'PROCESSING_DEPLOYMENT'|'PROCESSING_REMOVAL'|'DEPLOYMENT_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
