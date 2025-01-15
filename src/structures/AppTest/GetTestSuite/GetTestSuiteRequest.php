<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSuiteId
 * @property int|null $testSuiteVersion
 */
class GetTestSuiteRequest extends Request
{
    /**
     * @param array{
     *     testSuiteId: string,
     *     testSuiteVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
