<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property 'ALL_DATA'|'METADATA_ONLY'|null $includedData
 */
class DescribeExecutionRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
