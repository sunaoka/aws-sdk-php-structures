<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASSET'|'COMPUTATION_MODEL' $targetResourceType
 * @property string $targetResourceId
 * @property 'ASSET'|null $resolveToResourceType
 * @property string|null $resolveToResourceId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $actionType
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     targetResourceType: 'ASSET'|'COMPUTATION_MODEL',
     *     targetResourceId: string,
     *     resolveToResourceType?: 'ASSET'|null,
     *     resolveToResourceId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     actionType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
