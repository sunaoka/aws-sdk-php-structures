<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserMFAPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $PreferredMfa
 */
class SoftwareTokenMfaSettingsType extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     PreferredMfa?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
