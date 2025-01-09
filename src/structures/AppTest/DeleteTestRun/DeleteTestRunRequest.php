<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 */
class DeleteTestRunRequest extends Request
{
    /**
     * @param array{testRunId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
