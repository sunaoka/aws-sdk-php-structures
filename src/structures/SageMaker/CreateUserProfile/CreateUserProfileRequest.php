<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property string $SingleSignOnUserIdentifier
 * @property string $SingleSignOnUserValue
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\UserSettings $UserSettings
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string,
     *     SingleSignOnUserIdentifier?: string,
     *     SingleSignOnUserValue?: string,
     *     Tags?: list<Shapes\Tag>,
     *     UserSettings?: Shapes\UserSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
