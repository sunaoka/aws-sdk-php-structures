<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListRasterDataCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Description
 * @property string|null $DescriptionPageUrl
 * @property string $Name
 * @property list<Filter> $SupportedFilters
 * @property array<string, string>|null $Tags
 * @property 'PUBLIC'|'PREMIUM'|'USER' $Type
 */
class RasterDataCollectionMetadata extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Description: string,
     *     DescriptionPageUrl?: string|null,
     *     Name: string,
     *     SupportedFilters: list<Filter>,
     *     Tags?: array<string, string>|null,
     *     Type: 'PUBLIC'|'PREMIUM'|'USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
