<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents;

class CloudWatchEventsClient extends \Aws\CloudWatchEvents\CloudWatchEventsClient
{
    use ActivateEventSource\ActivateEventSourceTrait;
    use CancelReplay\CancelReplayTrait;
    use CreateApiDestination\CreateApiDestinationTrait;
    use CreateArchive\CreateArchiveTrait;
    use CreateConnection\CreateConnectionTrait;
    use CreateEventBus\CreateEventBusTrait;
    use CreatePartnerEventSource\CreatePartnerEventSourceTrait;
    use DeactivateEventSource\DeactivateEventSourceTrait;
    use DeauthorizeConnection\DeauthorizeConnectionTrait;
    use DeleteApiDestination\DeleteApiDestinationTrait;
    use DeleteArchive\DeleteArchiveTrait;
    use DeleteConnection\DeleteConnectionTrait;
    use DeleteEventBus\DeleteEventBusTrait;
    use DeletePartnerEventSource\DeletePartnerEventSourceTrait;
    use DeleteRule\DeleteRuleTrait;
    use DescribeApiDestination\DescribeApiDestinationTrait;
    use DescribeArchive\DescribeArchiveTrait;
    use DescribeConnection\DescribeConnectionTrait;
    use DescribeEventBus\DescribeEventBusTrait;
    use DescribeEventSource\DescribeEventSourceTrait;
    use DescribePartnerEventSource\DescribePartnerEventSourceTrait;
    use DescribeReplay\DescribeReplayTrait;
    use DescribeRule\DescribeRuleTrait;
    use DisableRule\DisableRuleTrait;
    use EnableRule\EnableRuleTrait;
    use ListApiDestinations\ListApiDestinationsTrait;
    use ListArchives\ListArchivesTrait;
    use ListConnections\ListConnectionsTrait;
    use ListEventBuses\ListEventBusesTrait;
    use ListEventSources\ListEventSourcesTrait;
    use ListPartnerEventSourceAccounts\ListPartnerEventSourceAccountsTrait;
    use ListPartnerEventSources\ListPartnerEventSourcesTrait;
    use ListReplays\ListReplaysTrait;
    use ListRuleNamesByTarget\ListRuleNamesByTargetTrait;
    use ListRules\ListRulesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTargetsByRule\ListTargetsByRuleTrait;
    use PutEvents\PutEventsTrait;
    use PutPartnerEvents\PutPartnerEventsTrait;
    use PutPermission\PutPermissionTrait;
    use PutRule\PutRuleTrait;
    use PutTargets\PutTargetsTrait;
    use RemovePermission\RemovePermissionTrait;
    use RemoveTargets\RemoveTargetsTrait;
    use StartReplay\StartReplayTrait;
    use TagResource\TagResourceTrait;
    use TestEventPattern\TestEventPatternTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApiDestination\UpdateApiDestinationTrait;
    use UpdateArchive\UpdateArchiveTrait;
    use UpdateConnection\UpdateConnectionTrait;
}
