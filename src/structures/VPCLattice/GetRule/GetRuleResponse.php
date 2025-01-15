<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RuleAction|null $action
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property bool|null $isDefault
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property Shapes\RuleMatch|null $match
 * @property string|null $name
 * @property int<1, 100>|null $priority
 */
class GetRuleResponse extends Response
{
}
