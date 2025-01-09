<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExecutionPreviewId
 */
class GetExecutionPreviewRequest extends Request
{
    /**
     * @param array{ExecutionPreviewId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
