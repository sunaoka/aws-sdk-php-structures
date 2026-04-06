<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserMFAPreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $PreferredMfa
 */
class EmailMfaSettingsType extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     PreferredMfa?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
