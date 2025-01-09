<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property int $Capacity
 * @property string $ARN
 * @property string $Description
 * @property list<Rule> $Rules
 * @property VisibilityConfig $VisibilityConfig
 * @property string $LabelNamespace
 * @property array<string, CustomResponseBody> $CustomResponseBodies
 * @property list<LabelSummary> $AvailableLabels
 * @property list<LabelSummary> $ConsumedLabels
 */
class RuleGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     Capacity: int,
     *     ARN: string,
     *     Description?: string,
     *     Rules?: list<Rule>,
     *     VisibilityConfig: VisibilityConfig,
     *     LabelNamespace?: string,
     *     CustomResponseBodies?: array<string, CustomResponseBody>,
     *     AvailableLabels?: list<LabelSummary>,
     *     ConsumedLabels?: list<LabelSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
