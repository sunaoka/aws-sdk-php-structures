<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $clientToken
 * @property Shapes\DataSetExportConfig $exportConfig
 * @property string|null $kmsKeyId
 */
class CreateDataSetExportTaskRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken?: string|null,
     *     exportConfig: Shapes\DataSetExportConfig,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
