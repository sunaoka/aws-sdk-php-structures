<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextChanges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 * @property string $FromVersionId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListContextChangesRequest extends Request
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     FromVersionId: string,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
