<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'phone_number'|'email'> $AttributesRequireVerificationBeforeUpdate
 */
class UserAttributeUpdateSettingsType extends Shape
{
    /**
     * @param array{AttributesRequireVerificationBeforeUpdate?: list<'phone_number'|'email'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
