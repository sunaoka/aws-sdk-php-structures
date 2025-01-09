<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthInfo $authInfo
 * @property Allowed $allowed
 * @property Denied $denied
 * @property 'ALLOWED'|'EXPLICIT_DENY'|'IMPLICIT_DENY' $authDecision
 * @property list<string> $missingContextValues
 */
class AuthResult extends Shape
{
    /**
     * @param array{
     *     authInfo?: AuthInfo,
     *     allowed?: Allowed,
     *     denied?: Denied,
     *     authDecision?: 'ALLOWED'|'EXPLICIT_DENY'|'IMPLICIT_DENY',
     *     missingContextValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
