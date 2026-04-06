<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASSET'|'COMPUTATION_MODEL' $targetResourceType
 * @property string $targetResourceId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property 'ASSET'|null $resolveToResourceType
 * @property string|null $resolveToResourceId
 */
class ListActionsRequest extends Request
{
    /**
     * @param array{
     *     targetResourceType: 'ASSET'|'COMPUTATION_MODEL',
     *     targetResourceId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     resolveToResourceType?: 'ASSET'|null,
     *     resolveToResourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
