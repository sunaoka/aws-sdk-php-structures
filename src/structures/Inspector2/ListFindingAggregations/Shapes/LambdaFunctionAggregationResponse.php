<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $functionName
 * @property array<string, string>|null $lambdaTags
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property string $resourceId
 * @property string|null $runtime
 * @property SeverityCounts|null $severityCounts
 */
class LambdaFunctionAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     functionName?: string|null,
     *     lambdaTags?: array<string, string>|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     resourceId: string,
     *     runtime?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
