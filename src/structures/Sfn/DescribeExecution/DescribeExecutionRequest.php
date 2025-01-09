<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property 'ALL_DATA'|'METADATA_ONLY' $includedData
 */
class DescribeExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
