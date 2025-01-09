<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StringFilter> $accountIds
 * @property Shapes\AggregationRequest $aggregationRequest
 * @property 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER' $aggregationType
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListFindingAggregationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<Shapes\StringFilter>,
     *     aggregationRequest?: Shapes\AggregationRequest,
     *     aggregationType: 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
