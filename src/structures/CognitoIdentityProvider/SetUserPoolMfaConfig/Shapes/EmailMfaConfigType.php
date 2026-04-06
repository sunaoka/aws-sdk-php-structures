<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $Subject
 */
class EmailMfaConfigType extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Subject?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
