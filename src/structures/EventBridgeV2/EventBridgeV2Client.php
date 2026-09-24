<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2;

class EventBridgeV2Client extends \Aws\EventBridgeV2\EventBridgeV2Client
{
    use CreateEventBus\CreateEventBusTrait;
    use CreateEventSource\CreateEventSourceTrait;
    use CreateSubscriber\CreateSubscriberTrait;
    use DeleteEventBus\DeleteEventBusTrait;
    use DeleteEventSource\DeleteEventSourceTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSubscriber\DeleteSubscriberTrait;
    use DescribeEventBus\DescribeEventBusTrait;
    use DescribeEventSource\DescribeEventSourceTrait;
    use DescribeSubscriber\DescribeSubscriberTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListEventBuses\ListEventBusesTrait;
    use ListEventSources\ListEventSourcesTrait;
    use ListResourcePolicies\ListResourcePoliciesTrait;
    use ListSubscribers\ListSubscribersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutEvents\PutEventsTrait;
    use PutRawEvents\PutRawEventsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RevokeResource\RevokeResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEventBus\UpdateEventBusTrait;
    use UpdateEventSource\UpdateEventSourceTrait;
    use UpdateSubscriber\UpdateSubscriberTrait;
}
