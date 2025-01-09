<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $functionName
 * @property array<string, string> $lambdaTags
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $resourceId
 * @property string $runtime
 * @property SeverityCounts $severityCounts
 */
class LambdaFunctionAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     functionName?: string,
     *     lambdaTags?: array<string, string>,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult,
     *     resourceId: string,
     *     runtime?: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
