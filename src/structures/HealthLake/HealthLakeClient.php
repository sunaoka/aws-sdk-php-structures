<?php

namespace Sunaoka\Aws\Structures\HealthLake;

class HealthLakeClient extends \Aws\HealthLake\HealthLakeClient
{
    use CreateFHIRDatastore\CreateFHIRDatastoreTrait;
    use DeleteFHIRDatastore\DeleteFHIRDatastoreTrait;
    use DescribeFHIRDatastore\DescribeFHIRDatastoreTrait;
    use DescribeFHIRExportJob\DescribeFHIRExportJobTrait;
    use DescribeFHIRImportJob\DescribeFHIRImportJobTrait;
    use ListFHIRDatastores\ListFHIRDatastoresTrait;
    use ListFHIRExportJobs\ListFHIRExportJobsTrait;
    use ListFHIRImportJobs\ListFHIRImportJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartFHIRExportJob\StartFHIRExportJobTrait;
    use StartFHIRImportJob\StartFHIRImportJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
