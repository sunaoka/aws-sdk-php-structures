<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListRasterDataCollections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 */
class ListRasterDataCollectionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
