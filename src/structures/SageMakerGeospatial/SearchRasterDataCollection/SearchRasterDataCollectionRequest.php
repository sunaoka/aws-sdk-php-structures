<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $NextToken
 * @property Shapes\RasterDataCollectionQueryWithBandFilterInput $RasterDataCollectionQuery
 */
class SearchRasterDataCollectionRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     NextToken?: string,
     *     RasterDataCollectionQuery: Shapes\RasterDataCollectionQueryWithBandFilterInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
