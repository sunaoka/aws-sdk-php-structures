<?php

namespace Sunaoka\Aws\Structures\signer;

class signerClient extends \Aws\signer\signerClient
{
    use AddProfilePermission\AddProfilePermissionTrait;
    use CancelSigningProfile\CancelSigningProfileTrait;
    use DescribeSigningJob\DescribeSigningJobTrait;
    use GetRevocationStatus\GetRevocationStatusTrait;
    use GetSigningPlatform\GetSigningPlatformTrait;
    use GetSigningProfile\GetSigningProfileTrait;
    use ListProfilePermissions\ListProfilePermissionsTrait;
    use ListSigningJobs\ListSigningJobsTrait;
    use ListSigningPlatforms\ListSigningPlatformsTrait;
    use ListSigningProfiles\ListSigningProfilesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutSigningProfile\PutSigningProfileTrait;
    use RemoveProfilePermission\RemoveProfilePermissionTrait;
    use RevokeSignature\RevokeSignatureTrait;
    use RevokeSigningProfile\RevokeSigningProfileTrait;
    use SignPayload\SignPayloadTrait;
    use StartSigningJob\StartSigningJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
