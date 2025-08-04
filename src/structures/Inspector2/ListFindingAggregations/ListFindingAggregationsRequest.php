<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER'|'CODE_REPOSITORY' $aggregationType
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<Shapes\StringFilter>|null $accountIds
 * @property Shapes\AggregationRequest|null $aggregationRequest
 */
class ListFindingAggregationsRequest extends Request
{
    /**
     * @param array{
     *     aggregationType: 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER'|'CODE_REPOSITORY',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     accountIds?: list<Shapes\StringFilter>|null,
     *     aggregationRequest?: Shapes\AggregationRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
