<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VersionName
 * @property string $SnsTopicArn
 * @property int<1, max> $Capacity
 * @property list<Shapes\RuleSummary> $Rules
 * @property string $LabelNamespace
 * @property list<Shapes\LabelSummary> $AvailableLabels
 * @property list<Shapes\LabelSummary> $ConsumedLabels
 */
class DescribeManagedRuleGroupResponse extends Response
{
}
