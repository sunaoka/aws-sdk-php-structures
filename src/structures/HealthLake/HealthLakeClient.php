<?php

namespace Sunaoka\Aws\Structures\HealthLake;

class HealthLakeClient extends \Aws\HealthLake\HealthLakeClient
{
    use CreateDataTransformationProfile\CreateDataTransformationProfileTrait;
    use CreateFHIRDatastore\CreateFHIRDatastoreTrait;
    use DeleteDataTransformationProfile\DeleteDataTransformationProfileTrait;
    use DeleteFHIRDatastore\DeleteFHIRDatastoreTrait;
    use DescribeDataTransformationJob\DescribeDataTransformationJobTrait;
    use DescribeFHIRDatastore\DescribeFHIRDatastoreTrait;
    use DescribeFHIRExportJob\DescribeFHIRExportJobTrait;
    use DescribeFHIRImportJob\DescribeFHIRImportJobTrait;
    use GetDataTransformationProfile\GetDataTransformationProfileTrait;
    use ListDataTransformationJobs\ListDataTransformationJobsTrait;
    use ListDataTransformationProfileVersions\ListDataTransformationProfileVersionsTrait;
    use ListDataTransformationProfiles\ListDataTransformationProfilesTrait;
    use ListFHIRDatastores\ListFHIRDatastoresTrait;
    use ListFHIRExportJobs\ListFHIRExportJobsTrait;
    use ListFHIRImportJobs\ListFHIRImportJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PublishDataTransformationProfile\PublishDataTransformationProfileTrait;
    use StartDataTransformationJob\StartDataTransformationJobTrait;
    use StartFHIRExportJob\StartFHIRExportJobTrait;
    use StartFHIRImportJob\StartFHIRImportJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataTransformationProfile\UpdateDataTransformationProfileTrait;
    use UpdateFHIRDatastore\UpdateFHIRDatastoreTrait;
    use UpdateProfileWithAgent\UpdateProfileWithAgentTrait;
}
