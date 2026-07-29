<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDatasetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $clientToken
 * @property string $destinationS3Uri
 * @property Shapes\ProcessingInput $input
 * @property Shapes\ExportErrorReportLocation $errorReportLocation
 */
class CreateDatasetExportJobRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     clientToken?: string|null,
     *     destinationS3Uri: string,
     *     input: Shapes\ProcessingInput,
     *     errorReportLocation: Shapes\ExportErrorReportLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
