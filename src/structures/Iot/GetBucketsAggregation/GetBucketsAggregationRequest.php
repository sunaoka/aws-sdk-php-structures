<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $indexName
 * @property string $queryString
 * @property string $aggregationField
 * @property string|null $queryVersion
 * @property Shapes\BucketsAggregationType $bucketsAggregationType
 */
class GetBucketsAggregationRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string|null,
     *     queryString: string,
     *     aggregationField: string,
     *     queryVersion?: string|null,
     *     bucketsAggregationType: Shapes\BucketsAggregationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
