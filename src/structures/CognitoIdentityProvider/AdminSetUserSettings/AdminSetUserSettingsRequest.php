<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property list<Shapes\MFAOptionType> $MFAOptions
 */
class AdminSetUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     MFAOptions: list<Shapes\MFAOptionType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
