<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property Shapes\RuleMatch|null $match
 * @property int<1, 2000>|null $priority
 * @property Shapes\RuleAction|null $action
 */
class CreateRuleResponse extends Response
{
}
