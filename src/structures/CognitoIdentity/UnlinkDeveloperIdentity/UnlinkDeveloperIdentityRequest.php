<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\UnlinkDeveloperIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityId
 * @property string $IdentityPoolId
 * @property string $DeveloperProviderName
 * @property string $DeveloperUserIdentifier
 */
class UnlinkDeveloperIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityId: string,
     *     IdentityPoolId: string,
     *     DeveloperProviderName: string,
     *     DeveloperUserIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
