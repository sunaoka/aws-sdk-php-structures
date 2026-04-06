<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string|null $name
 * @property string|null $input
 * @property string|null $traceHeader
 * @property 'ALL_DATA'|'METADATA_ONLY'|null $includedData
 */
class StartSyncExecutionRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     name?: string|null,
     *     input?: string|null,
     *     traceHeader?: string|null,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
