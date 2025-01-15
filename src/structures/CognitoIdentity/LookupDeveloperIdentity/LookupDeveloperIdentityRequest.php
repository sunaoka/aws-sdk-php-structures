<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\LookupDeveloperIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string|null $IdentityId
 * @property string|null $DeveloperUserIdentifier
 * @property int<1, 60>|null $MaxResults
 * @property string|null $NextToken
 */
class LookupDeveloperIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId?: string|null,
     *     DeveloperUserIdentifier?: string|null,
     *     MaxResults?: int<1, 60>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
