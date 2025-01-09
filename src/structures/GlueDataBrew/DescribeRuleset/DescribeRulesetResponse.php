<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRuleset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property string $TargetArn
 * @property list<Shapes\Rule> $Rules
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $CreatedBy
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $ResourceArn
 * @property array<string, string> $Tags
 */
class DescribeRulesetResponse extends Response
{
}
