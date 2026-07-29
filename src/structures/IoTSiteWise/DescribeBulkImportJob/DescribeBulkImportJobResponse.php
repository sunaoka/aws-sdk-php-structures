<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeBulkImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $jobName
 * @property 'PENDING'|'CANCELLED'|'RUNNING'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $jobStatus
 * @property string $jobRoleArn
 * @property list<Shapes\File> $files
 * @property Shapes\ErrorReportLocation $errorReportLocation
 * @property Shapes\JobConfiguration|null $jobConfiguration
 * @property \Aws\Api\DateTimeResult $jobCreationDate
 * @property \Aws\Api\DateTimeResult $jobLastUpdateDate
 * @property bool|null $adaptiveIngestion
 * @property bool|null $deleteFilesAfterImport
 * @property string|null $datasetId
 * @property string|null $workspaceName
 */
class DescribeBulkImportJobResponse extends Response
{
}
