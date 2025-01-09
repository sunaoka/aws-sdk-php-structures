<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $reportArns
 */
class BatchGetReportsRequest extends Request
{
    /**
     * @param array{reportArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
