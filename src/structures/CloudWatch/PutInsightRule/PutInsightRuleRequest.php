<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutInsightRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property string $RuleState
 * @property string $RuleDefinition
 * @property list<Shapes\Tag> $Tags
 */
class PutInsightRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     RuleState?: string,
     *     RuleDefinition: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
