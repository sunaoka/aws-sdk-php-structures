<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserMFAPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 */
class WebAuthnMfaSettingsType extends Shape
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
