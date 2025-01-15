<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityId
 * @property list<string>|null $Logins
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class IdentityDescription extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string|null,
     *     Logins?: list<string>|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
