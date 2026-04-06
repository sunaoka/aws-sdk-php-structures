<?php

namespace Sunaoka\Aws\Structures\IotDataPlane;

class IotDataPlaneClient extends \Aws\IotDataPlane\IotDataPlaneClient
{
    use DeleteConnection\DeleteConnectionTrait;
    use DeleteThingShadow\DeleteThingShadowTrait;
    use GetRetainedMessage\GetRetainedMessageTrait;
    use GetThingShadow\GetThingShadowTrait;
    use ListNamedShadowsForThing\ListNamedShadowsForThingTrait;
    use ListRetainedMessages\ListRetainedMessagesTrait;
    use Publish\PublishTrait;
    use UpdateThingShadow\UpdateThingShadowTrait;
}
