<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASSET' $targetResourceType
 * @property string $targetResourceId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListActionsRequest extends Request
{
    /**
     * @param array{
     *     targetResourceType: 'ASSET',
     *     targetResourceId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
