<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceId
 * @property string|null $functionName
 * @property string|null $runtime
 * @property array<string, string>|null $lambdaTags
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class LambdaFunctionAggregationResponse extends Shape
{
    /**
     * @param array{
     *     resourceId: string,
     *     functionName?: string|null,
     *     runtime?: string|null,
     *     lambdaTags?: array<string, string>|null,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
