<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrBlocks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $LocationName
 * @property string $NextToken
 * @property string $MaxResults
 */
class ListCidrBlocksRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     LocationName?: string,
     *     NextToken?: string,
     *     MaxResults?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
