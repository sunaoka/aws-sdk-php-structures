<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testCaseId
 */
class DeleteTestCaseRequest extends Request
{
    /**
     * @param array{testCaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
