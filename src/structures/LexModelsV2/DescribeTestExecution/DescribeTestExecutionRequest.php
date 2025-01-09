<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testExecutionId
 */
class DescribeTestExecutionRequest extends Request
{
    /**
     * @param array{testExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
