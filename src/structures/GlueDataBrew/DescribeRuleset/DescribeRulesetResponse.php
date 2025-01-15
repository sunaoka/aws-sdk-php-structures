<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRuleset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $TargetArn
 * @property list<Shapes\Rule>|null $Rules
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatedBy
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $ResourceArn
 * @property array<string, string>|null $Tags
 */
class DescribeRulesetResponse extends Response
{
}
