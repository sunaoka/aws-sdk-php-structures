<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $UserProfileName
 * @property Shapes\UserSettings $UserSettings
 */
class UpdateUserProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     UserProfileName: string,
     *     UserSettings?: Shapes\UserSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
