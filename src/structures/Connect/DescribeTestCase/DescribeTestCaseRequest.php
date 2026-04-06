<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $TestCaseId
 * @property 'PUBLISHED'|'SAVED'|null $Status
 */
class DescribeTestCaseRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TestCaseId: string,
     *     Status?: 'PUBLISHED'|'SAVED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
