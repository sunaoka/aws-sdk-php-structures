<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient;

class WorkSpacesThinClientClient extends \Aws\WorkSpacesThinClient\WorkSpacesThinClientClient
{
    use CreateEnvironment\CreateEnvironmentTrait;
    use DeleteDevice\DeleteDeviceTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeregisterDevice\DeregisterDeviceTrait;
    use GetDevice\GetDeviceTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetSoftwareSet\GetSoftwareSetTrait;
    use ListDevices\ListDevicesTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListSoftwareSets\ListSoftwareSetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDevice\UpdateDeviceTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateSoftwareSet\UpdateSoftwareSetTrait;
}
