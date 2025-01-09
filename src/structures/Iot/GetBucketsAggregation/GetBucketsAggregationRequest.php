<?php

namespace Sunaoka\Aws\Structures\Iot\GetBucketsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $indexName
 * @property string $queryString
 * @property string $aggregationField
 * @property string $queryVersion
 * @property Shapes\BucketsAggregationType $bucketsAggregationType
 */
class GetBucketsAggregationRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string,
     *     queryString: string,
     *     aggregationField: string,
     *     queryVersion?: string,
     *     bucketsAggregationType: Shapes\BucketsAggregationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
