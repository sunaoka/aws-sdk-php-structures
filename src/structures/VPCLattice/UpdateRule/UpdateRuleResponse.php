<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RuleAction|null $action
 * @property string|null $arn
 * @property string|null $id
 * @property bool|null $isDefault
 * @property Shapes\RuleMatch|null $match
 * @property string|null $name
 * @property int<1, 100>|null $priority
 */
class UpdateRuleResponse extends Response
{
}
