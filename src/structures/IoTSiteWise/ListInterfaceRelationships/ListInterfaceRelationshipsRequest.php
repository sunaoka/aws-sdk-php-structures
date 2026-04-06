<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListInterfaceRelationships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interfaceAssetModelId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListInterfaceRelationshipsRequest extends Request
{
    /**
     * @param array{
     *     interfaceAssetModelId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
