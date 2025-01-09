<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testCaseId
 * @property int $testCaseVersion
 */
class GetTestCaseRequest extends Request
{
    /**
     * @param array{
     *     testCaseId: string,
     *     testCaseVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
