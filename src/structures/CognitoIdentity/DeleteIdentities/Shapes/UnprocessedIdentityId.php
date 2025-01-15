<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DeleteIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityId
 * @property 'AccessDenied'|'InternalServerError'|null $ErrorCode
 */
class UnprocessedIdentityId extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string|null,
     *     ErrorCode?: 'AccessDenied'|'InternalServerError'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
