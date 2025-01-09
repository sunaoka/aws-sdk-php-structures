<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASSET' $targetResourceType
 * @property string $targetResourceId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListActionsRequest extends Request
{
    /**
     * @param array{
     *     targetResourceType: 'ASSET',
     *     targetResourceId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
