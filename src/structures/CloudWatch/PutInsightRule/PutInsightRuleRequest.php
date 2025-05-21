<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutInsightRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleName
 * @property string|null $RuleState
 * @property string $RuleDefinition
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $ApplyOnTransformedLogs
 */
class PutInsightRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleName: string,
     *     RuleState?: string|null,
     *     RuleDefinition: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ApplyOnTransformedLogs?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
