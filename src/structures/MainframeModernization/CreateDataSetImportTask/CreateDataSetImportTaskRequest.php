<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property Shapes\DataSetImportConfig $importConfig
 */
class CreateDataSetImportTaskRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken?: string,
     *     importConfig: Shapes\DataSetImportConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
