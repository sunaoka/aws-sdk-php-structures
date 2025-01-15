<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VersionName
 * @property string|null $SnsTopicArn
 * @property int<1, max>|null $Capacity
 * @property list<Shapes\RuleSummary>|null $Rules
 * @property string|null $LabelNamespace
 * @property list<Shapes\LabelSummary>|null $AvailableLabels
 * @property list<Shapes\LabelSummary>|null $ConsumedLabels
 */
class DescribeManagedRuleGroupResponse extends Response
{
}
