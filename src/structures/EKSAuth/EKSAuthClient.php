<?php

namespace Sunaoka\Aws\Structures\EKSAuth;

class EKSAuthClient extends \Aws\EKSAuth\EKSAuthClient
{
    use AssumeRoleForPodIdentity\AssumeRoleForPodIdentityTrait;
}
