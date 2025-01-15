<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthInfo|null $authInfo
 * @property Allowed|null $allowed
 * @property Denied|null $denied
 * @property 'ALLOWED'|'EXPLICIT_DENY'|'IMPLICIT_DENY'|null $authDecision
 * @property list<string>|null $missingContextValues
 */
class AuthResult extends Shape
{
    /**
     * @param array{
     *     authInfo?: AuthInfo|null,
     *     allowed?: Allowed|null,
     *     denied?: Denied|null,
     *     authDecision?: 'ALLOWED'|'EXPLICIT_DENY'|'IMPLICIT_DENY'|null,
     *     missingContextValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
