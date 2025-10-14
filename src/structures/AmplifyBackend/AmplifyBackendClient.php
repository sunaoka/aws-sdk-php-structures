<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend;

class AmplifyBackendClient extends \Aws\AmplifyBackend\AmplifyBackendClient
{
    use CloneBackend\CloneBackendTrait;
    use CreateBackend\CreateBackendTrait;
    use CreateBackendAPI\CreateBackendAPITrait;
    use CreateBackendAuth\CreateBackendAuthTrait;
    use CreateBackendConfig\CreateBackendConfigTrait;
    use CreateBackendStorage\CreateBackendStorageTrait;
    use CreateToken\CreateTokenTrait;
    use DeleteBackend\DeleteBackendTrait;
    use DeleteBackendAPI\DeleteBackendAPITrait;
    use DeleteBackendAuth\DeleteBackendAuthTrait;
    use DeleteBackendStorage\DeleteBackendStorageTrait;
    use DeleteToken\DeleteTokenTrait;
    use GenerateBackendAPIModels\GenerateBackendAPIModelsTrait;
    use GetBackend\GetBackendTrait;
    use GetBackendAPI\GetBackendAPITrait;
    use GetBackendAPIModels\GetBackendAPIModelsTrait;
    use GetBackendAuth\GetBackendAuthTrait;
    use GetBackendJob\GetBackendJobTrait;
    use GetBackendStorage\GetBackendStorageTrait;
    use ImportBackendAuth\ImportBackendAuthTrait;
    use ImportBackendStorage\ImportBackendStorageTrait;
    use ListBackendJobs\ListBackendJobsTrait;
    use ListS3Buckets\ListS3BucketsTrait;
    use RemoveAllBackends\RemoveAllBackendsTrait;
    use RemoveBackendConfig\RemoveBackendConfigTrait;
    use UpdateBackendAPI\UpdateBackendAPITrait;
    use UpdateBackendAuth\UpdateBackendAuthTrait;
    use UpdateBackendConfig\UpdateBackendConfigTrait;
    use UpdateBackendJob\UpdateBackendJobTrait;
    use UpdateBackendStorage\UpdateBackendStorageTrait;
    use GetChallengeToken\GetChallengeTokenTrait;
}
