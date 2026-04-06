<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $dataSetId
 * @property string $listingId
 * @property string $revisionId
 */
class ProviderMarketplaceConfiguration extends Shape
{
    /**
     * @param array{
     *     assetId: string,
     *     dataSetId: string,
     *     listingId: string,
     *     revisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
