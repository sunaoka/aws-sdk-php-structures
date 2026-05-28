<?php

namespace Sunaoka\Aws\Structures\IotDataPlane;

class IotDataPlaneClient extends \Aws\IotDataPlane\IotDataPlaneClient
{
    use DeleteConnection\DeleteConnectionTrait;
    use DeleteThingShadow\DeleteThingShadowTrait;
    use GetConnection\GetConnectionTrait;
    use GetRetainedMessage\GetRetainedMessageTrait;
    use GetThingShadow\GetThingShadowTrait;
    use ListNamedShadowsForThing\ListNamedShadowsForThingTrait;
    use ListRetainedMessages\ListRetainedMessagesTrait;
    use ListSubscriptions\ListSubscriptionsTrait;
    use Publish\PublishTrait;
    use SendDirectMessage\SendDirectMessageTrait;
    use UpdateThingShadow\UpdateThingShadowTrait;
}
