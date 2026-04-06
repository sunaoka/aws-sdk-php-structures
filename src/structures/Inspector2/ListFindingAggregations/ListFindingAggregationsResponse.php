<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'FINDING_TYPE'|'PACKAGE'|'TITLE'|'REPOSITORY'|'AMI'|'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER'|'IMAGE_LAYER'|'ACCOUNT'|'AWS_LAMBDA_FUNCTION'|'LAMBDA_LAYER'|'CODE_REPOSITORY' $aggregationType
 * @property list<Shapes\AggregationResponse>|null $responses
 * @property string|null $nextToken
 */
class ListFindingAggregationsResponse extends Response
{
}
