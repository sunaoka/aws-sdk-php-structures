<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConformancePackName
 * @property list<Shapes\ConformancePackEvaluationResult>|null $ConformancePackRuleEvaluationResults
 * @property string|null $NextToken
 */
class GetConformancePackComplianceDetailsResponse extends Response
{
}
