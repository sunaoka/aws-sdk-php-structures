<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property Shapes\ExecutionInputs $ExecutionInputs
 */
class StartExecutionPreviewRequest extends Request
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string,
     *     ExecutionInputs?: Shapes\ExecutionInputs
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
