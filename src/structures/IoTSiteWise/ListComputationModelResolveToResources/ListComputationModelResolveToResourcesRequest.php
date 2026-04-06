<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelResolveToResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computationModelId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListComputationModelResolveToResourcesRequest extends Request
{
    /**
     * @param array{
     *     computationModelId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
