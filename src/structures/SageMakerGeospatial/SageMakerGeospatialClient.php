<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial;

class SageMakerGeospatialClient extends \Aws\SageMakerGeospatial\SageMakerGeospatialClient
{
    use DeleteEarthObservationJob\DeleteEarthObservationJobTrait;
    use DeleteVectorEnrichmentJob\DeleteVectorEnrichmentJobTrait;
    use ExportEarthObservationJob\ExportEarthObservationJobTrait;
    use ExportVectorEnrichmentJob\ExportVectorEnrichmentJobTrait;
    use GetEarthObservationJob\GetEarthObservationJobTrait;
    use GetRasterDataCollection\GetRasterDataCollectionTrait;
    use GetTile\GetTileTrait;
    use GetVectorEnrichmentJob\GetVectorEnrichmentJobTrait;
    use ListEarthObservationJobs\ListEarthObservationJobsTrait;
    use ListRasterDataCollections\ListRasterDataCollectionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVectorEnrichmentJobs\ListVectorEnrichmentJobsTrait;
    use SearchRasterDataCollection\SearchRasterDataCollectionTrait;
    use StartEarthObservationJob\StartEarthObservationJobTrait;
    use StartVectorEnrichmentJob\StartVectorEnrichmentJobTrait;
    use StopEarthObservationJob\StopEarthObservationJobTrait;
    use StopVectorEnrichmentJob\StopVectorEnrichmentJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
