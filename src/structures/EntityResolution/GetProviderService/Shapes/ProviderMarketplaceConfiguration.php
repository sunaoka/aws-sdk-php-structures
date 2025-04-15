<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSetId
 * @property string $revisionId
 * @property string $assetId
 * @property string $listingId
 */
class ProviderMarketplaceConfiguration extends Shape
{
    /**
     * @param array{
     *     dataSetId: string,
     *     revisionId: string,
     *     assetId: string,
     *     listingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
