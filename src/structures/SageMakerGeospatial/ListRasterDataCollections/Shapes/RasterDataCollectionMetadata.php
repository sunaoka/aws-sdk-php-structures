<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListRasterDataCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Description
 * @property string $DescriptionPageUrl
 * @property string $Name
 * @property list<Filter> $SupportedFilters
 * @property array<string, string> $Tags
 * @property 'PUBLIC'|'PREMIUM'|'USER' $Type
 */
class RasterDataCollectionMetadata extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Description: string,
     *     DescriptionPageUrl?: string,
     *     Name: string,
     *     SupportedFilters: list<Filter>,
     *     Tags?: array<string, string>,
     *     Type: 'PUBLIC'|'PREMIUM'|'USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
