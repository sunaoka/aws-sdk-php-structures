<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricDataQueryDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Path
 * @property string $Expression
 * @property 'PROMQL'|'SQL'|'METRIC_MATH' $Type
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class GetMetricDataQueryDefinitionResponse extends Response
{
}
