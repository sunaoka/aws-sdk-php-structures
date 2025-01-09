<?php

namespace Sunaoka\Aws\Structures\Sfn\StartSyncExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string $name
 * @property string $input
 * @property string $traceHeader
 * @property 'ALL_DATA'|'METADATA_ONLY' $includedData
 */
class StartSyncExecutionRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     name?: string,
     *     input?: string,
     *     traceHeader?: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
