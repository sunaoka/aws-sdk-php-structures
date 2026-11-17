<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextStoreAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListContextStoreAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
