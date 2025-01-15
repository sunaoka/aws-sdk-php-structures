<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetRasterDataCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Description
 * @property string $DescriptionPageUrl
 * @property list<string> $ImageSourceBands
 * @property string $Name
 * @property list<Shapes\Filter> $SupportedFilters
 * @property array<string, string>|null $Tags
 * @property 'PUBLIC'|'PREMIUM'|'USER' $Type
 */
class GetRasterDataCollectionResponse extends Response
{
}
