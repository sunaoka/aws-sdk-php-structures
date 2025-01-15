<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $jobRoleArn
 * @property list<Shapes\File> $files
 * @property Shapes\ErrorReportLocation $errorReportLocation
 * @property Shapes\JobConfiguration $jobConfiguration
 * @property bool|null $adaptiveIngestion
 * @property bool|null $deleteFilesAfterImport
 */
class CreateBulkImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobRoleArn: string,
     *     files: list<Shapes\File>,
     *     errorReportLocation: Shapes\ErrorReportLocation,
     *     jobConfiguration: Shapes\JobConfiguration,
     *     adaptiveIngestion?: bool|null,
     *     deleteFilesAfterImport?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
