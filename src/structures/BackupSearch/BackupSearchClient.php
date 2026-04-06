<?php

namespace Sunaoka\Aws\Structures\BackupSearch;

class BackupSearchClient extends \Aws\BackupSearch\BackupSearchClient
{
    use GetSearchJob\GetSearchJobTrait;
    use GetSearchResultExportJob\GetSearchResultExportJobTrait;
    use ListSearchJobBackups\ListSearchJobBackupsTrait;
    use ListSearchJobResults\ListSearchJobResultsTrait;
    use ListSearchJobs\ListSearchJobsTrait;
    use ListSearchResultExportJobs\ListSearchResultExportJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartSearchJob\StartSearchJobTrait;
    use StartSearchResultExportJob\StartSearchResultExportJobTrait;
    use StopSearchJob\StopSearchJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
