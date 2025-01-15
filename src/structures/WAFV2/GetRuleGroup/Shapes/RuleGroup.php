<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property int<1, max> $Capacity
 * @property string $ARN
 * @property string|null $Description
 * @property list<Rule>|null $Rules
 * @property VisibilityConfig $VisibilityConfig
 * @property string|null $LabelNamespace
 * @property array<string, CustomResponseBody>|null $CustomResponseBodies
 * @property list<LabelSummary>|null $AvailableLabels
 * @property list<LabelSummary>|null $ConsumedLabels
 */
class RuleGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     Capacity: int<1, max>,
     *     ARN: string,
     *     Description?: string|null,
     *     Rules?: list<Rule>|null,
     *     VisibilityConfig: VisibilityConfig,
     *     LabelNamespace?: string|null,
     *     CustomResponseBodies?: array<string, CustomResponseBody>|null,
     *     AvailableLabels?: list<LabelSummary>|null,
     *     ConsumedLabels?: list<LabelSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
