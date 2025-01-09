<?php

namespace Sunaoka\Aws\Structures\AppTest\DeleteTestSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 */
class DeleteTestSuiteRequest extends Request
{
    /**
     * @param array{testSuiteId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
