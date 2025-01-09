<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property Shapes\TestCaseFilter $filter
 */
class DescribeTestCasesRequest extends Request
{
    /**
     * @param array{
     *     reportArn: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     filter?: Shapes\TestCaseFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
