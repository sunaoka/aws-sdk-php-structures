<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RuleAction $action
 * @property string $arn
 * @property string $id
 * @property Shapes\RuleMatch $match
 * @property string $name
 * @property int<1, 100> $priority
 */
class CreateRuleResponse extends Response
{
}
