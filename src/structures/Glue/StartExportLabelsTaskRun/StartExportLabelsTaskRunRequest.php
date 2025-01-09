<?php

namespace Sunaoka\Aws\Structures\Glue\StartExportLabelsTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $OutputS3Path
 */
class StartExportLabelsTaskRunRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     OutputS3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
