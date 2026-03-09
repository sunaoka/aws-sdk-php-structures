<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 * @property string $ExecutionId
 */
class GetExecutionRequest extends Request
{
    /**
     * @param array{
     *     ExportArn: string,
     *     ExecutionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
