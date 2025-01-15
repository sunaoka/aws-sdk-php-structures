<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property Shapes\TestCaseFilter|null $filter
 */
class DescribeTestCasesRequest extends Request
{
    /**
     * @param array{
     *     reportArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filter?: Shapes\TestCaseFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
