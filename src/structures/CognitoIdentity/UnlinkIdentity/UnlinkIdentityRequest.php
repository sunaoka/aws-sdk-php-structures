<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\UnlinkIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityId
 * @property array<string, string> $Logins
 * @property list<string> $LoginsToRemove
 */
class UnlinkIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityId: string,
     *     Logins: array<string, string>,
     *     LoginsToRemove: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
