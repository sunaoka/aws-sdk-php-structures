<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityId
 * @property list<string> $Logins
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class IdentityDescription extends Shape
{
    /**
     * @param array{
     *     IdentityId?: string,
     *     Logins?: list<string>,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
