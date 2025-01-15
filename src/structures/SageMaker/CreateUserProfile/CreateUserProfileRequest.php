<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property string|null $SingleSignOnUserIdentifier
 * @property string|null $SingleSignOnUserValue
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\UserSettings|null $UserSettings
 */
class CreateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string,
     *     SingleSignOnUserIdentifier?: string|null,
     *     SingleSignOnUserValue?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     UserSettings?: Shapes\UserSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
