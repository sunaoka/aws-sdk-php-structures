<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DeleteIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $IdentityIdsToDelete
 */
class DeleteIdentitiesRequest extends Request
{
    /**
     * @param array{IdentityIdsToDelete: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
