<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseId
 */
class DeleteTestCaseRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
