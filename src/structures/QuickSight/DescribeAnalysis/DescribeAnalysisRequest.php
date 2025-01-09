<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 */
class DescribeAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
