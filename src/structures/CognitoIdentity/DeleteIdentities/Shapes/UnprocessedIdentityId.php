<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DeleteIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityId
 * @property 'AccessDenied'|'InternalServerError' $ErrorCode
 */
class UnprocessedIdentityId extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string,
     *     ErrorCode?: 'AccessDenied'|'InternalServerError'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
