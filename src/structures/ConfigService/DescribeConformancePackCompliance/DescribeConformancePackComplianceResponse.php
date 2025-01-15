<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConformancePackName
 * @property list<Shapes\ConformancePackRuleCompliance> $ConformancePackRuleComplianceList
 * @property string|null $NextToken
 */
class DescribeConformancePackComplianceResponse extends Response
{
}
