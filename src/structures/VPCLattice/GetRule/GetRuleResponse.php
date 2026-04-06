<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property bool|null $isDefault
 * @property Shapes\RuleMatch|null $match
 * @property int<1, 2000>|null $priority
 * @property Shapes\RuleAction|null $action
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class GetRuleResponse extends Response
{
}
