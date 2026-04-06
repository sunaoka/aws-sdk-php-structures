<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StringFilter>|null $accountIds
 * @property Shapes\AggregationRequest|null $aggregationRequest
 * @property 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER' $aggregationType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListFindingAggregationsRequest extends Request
{
    /**
     * @param array{
     *     accountIds?: list<Shapes\StringFilter>|null,
     *     aggregationRequest?: Shapes\AggregationRequest|null,
     *     aggregationType: 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER',
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
