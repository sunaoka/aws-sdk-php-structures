<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\LookupDeveloperIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DeveloperUserIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 */
class LookupDeveloperIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId?: string,
     *     DeveloperUserIdentifier?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
