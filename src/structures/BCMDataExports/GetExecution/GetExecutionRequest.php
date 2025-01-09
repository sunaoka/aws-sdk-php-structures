<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExecutionId
 * @property string $ExportArn
 */
class GetExecutionRequest extends Request
{
    /**
     * @param array{
     *     ExecutionId: string,
     *     ExportArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
