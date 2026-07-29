<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $jobRoleArn
 * @property list<Shapes\File> $files
 * @property Shapes\ErrorReportLocation $errorReportLocation
 * @property Shapes\JobConfiguration|null $jobConfiguration
 * @property bool|null $adaptiveIngestion
 * @property bool|null $deleteFilesAfterImport
 * @property string|null $datasetId
 * @property string|null $workspaceName
 */
class CreateBulkImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobRoleArn: string,
     *     files: list<Shapes\File>,
     *     errorReportLocation: Shapes\ErrorReportLocation,
     *     jobConfiguration?: Shapes\JobConfiguration|null,
     *     adaptiveIngestion?: bool|null,
     *     deleteFilesAfterImport?: bool|null,
     *     datasetId?: string|null,
     *     workspaceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
