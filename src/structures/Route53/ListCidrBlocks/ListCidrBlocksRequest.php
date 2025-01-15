<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string|null $LocationName
 * @property string|null $NextToken
 * @property string|null $MaxResults
 */
class ListCidrBlocksRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     LocationName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
