<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property list<Shapes\MFAOptionType> $MFAOptions
 */
class SetUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     MFAOptions: list<Shapes\MFAOptionType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
