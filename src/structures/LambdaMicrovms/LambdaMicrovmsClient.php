<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms;

class LambdaMicrovmsClient extends \Aws\LambdaMicrovms\LambdaMicrovmsClient
{
    use CreateMicrovmAuthToken\CreateMicrovmAuthTokenTrait;
    use CreateMicrovmImage\CreateMicrovmImageTrait;
    use CreateMicrovmShellAuthToken\CreateMicrovmShellAuthTokenTrait;
    use DeleteMicrovmImage\DeleteMicrovmImageTrait;
    use DeleteMicrovmImageVersion\DeleteMicrovmImageVersionTrait;
    use GetMicrovm\GetMicrovmTrait;
    use GetMicrovmImage\GetMicrovmImageTrait;
    use GetMicrovmImageBuild\GetMicrovmImageBuildTrait;
    use GetMicrovmImageVersion\GetMicrovmImageVersionTrait;
    use ListManagedMicrovmImageVersions\ListManagedMicrovmImageVersionsTrait;
    use ListManagedMicrovmImages\ListManagedMicrovmImagesTrait;
    use ListMicrovmImageBuilds\ListMicrovmImageBuildsTrait;
    use ListMicrovmImageVersions\ListMicrovmImageVersionsTrait;
    use ListMicrovmImages\ListMicrovmImagesTrait;
    use ListMicrovms\ListMicrovmsTrait;
    use ListTags\ListTagsTrait;
    use ResumeMicrovm\ResumeMicrovmTrait;
    use RunMicrovm\RunMicrovmTrait;
    use SuspendMicrovm\SuspendMicrovmTrait;
    use TagResource\TagResourceTrait;
    use TerminateMicrovm\TerminateMicrovmTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMicrovmImage\UpdateMicrovmImageTrait;
    use UpdateMicrovmImageVersion\UpdateMicrovmImageVersionTrait;
}
