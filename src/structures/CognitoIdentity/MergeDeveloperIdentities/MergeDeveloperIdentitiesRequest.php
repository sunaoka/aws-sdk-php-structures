<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\MergeDeveloperIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceUserIdentifier
 * @property string $DestinationUserIdentifier
 * @property string $DeveloperProviderName
 * @property string $IdentityPoolId
 */
class MergeDeveloperIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     SourceUserIdentifier: string,
     *     DestinationUserIdentifier: string,
     *     DeveloperProviderName: string,
     *     IdentityPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
