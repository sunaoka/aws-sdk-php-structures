<?php

namespace Sunaoka\Aws\Structures\Glue\StartImportLabelsTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $InputS3Path
 * @property bool $ReplaceAllLabels
 */
class StartImportLabelsTaskRunRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     InputS3Path: string,
     *     ReplaceAllLabels?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
