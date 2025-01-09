<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RuleAction $action
 * @property string $arn
 * @property string $id
 * @property bool $isDefault
 * @property Shapes\RuleMatch $match
 * @property string $name
 * @property int $priority
 */
class UpdateRuleResponse extends Response
{
}
