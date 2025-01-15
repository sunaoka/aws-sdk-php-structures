<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DocumentName
 * @property string|null $DocumentVersion
 * @property Shapes\ExecutionInputs|null $ExecutionInputs
 */
class StartExecutionPreviewRequest extends Request
{
    /**
     * @param array{
     *     DocumentName: string,
     *     DocumentVersion?: string|null,
     *     ExecutionInputs?: Shapes\ExecutionInputs|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
