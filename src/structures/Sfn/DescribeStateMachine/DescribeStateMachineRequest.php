<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property 'ALL_DATA'|'METADATA_ONLY' $includedData
 */
class DescribeStateMachineRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
