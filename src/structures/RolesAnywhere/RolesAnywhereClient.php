<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere;

class RolesAnywhereClient extends \Aws\RolesAnywhere\RolesAnywhereClient
{
    use CreateProfile\CreateProfileTrait;
    use CreateTrustAnchor\CreateTrustAnchorTrait;
    use DeleteAttributeMapping\DeleteAttributeMappingTrait;
    use DeleteCrl\DeleteCrlTrait;
    use DeleteProfile\DeleteProfileTrait;
    use DeleteTrustAnchor\DeleteTrustAnchorTrait;
    use DisableCrl\DisableCrlTrait;
    use DisableProfile\DisableProfileTrait;
    use DisableTrustAnchor\DisableTrustAnchorTrait;
    use EnableCrl\EnableCrlTrait;
    use EnableProfile\EnableProfileTrait;
    use EnableTrustAnchor\EnableTrustAnchorTrait;
    use GetCrl\GetCrlTrait;
    use GetProfile\GetProfileTrait;
    use GetSubject\GetSubjectTrait;
    use GetTrustAnchor\GetTrustAnchorTrait;
    use ImportCrl\ImportCrlTrait;
    use ListCrls\ListCrlsTrait;
    use ListProfiles\ListProfilesTrait;
    use ListSubjects\ListSubjectsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTrustAnchors\ListTrustAnchorsTrait;
    use PutAttributeMapping\PutAttributeMappingTrait;
    use PutNotificationSettings\PutNotificationSettingsTrait;
    use ResetNotificationSettings\ResetNotificationSettingsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCrl\UpdateCrlTrait;
    use UpdateProfile\UpdateProfileTrait;
    use UpdateTrustAnchor\UpdateTrustAnchorTrait;
}
