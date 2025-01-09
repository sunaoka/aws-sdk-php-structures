<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\RuleAction $action
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property bool $isDefault
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property Shapes\RuleMatch $match
 * @property string $name
 * @property int $priority
 */
class GetRuleResponse extends Response
{
}
