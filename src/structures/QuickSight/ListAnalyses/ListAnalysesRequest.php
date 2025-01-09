<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListAnalysesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
