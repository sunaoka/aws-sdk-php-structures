<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReportGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $reportGroupArns
 */
class BatchGetReportGroupsRequest extends Request
{
    /**
     * @param array{reportGroupArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
