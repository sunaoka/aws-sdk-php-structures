<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $EnabledSecurityControlIdentifiers
 * @property list<string>|null $DisabledSecurityControlIdentifiers
 * @property list<SecurityControlCustomParameter>|null $SecurityControlCustomParameters
 */
class SecurityControlsConfiguration extends Shape
{
    /**
     * @param array{
     *     EnabledSecurityControlIdentifiers?: list<string>|null,
     *     DisabledSecurityControlIdentifiers?: list<string>|null,
     *     SecurityControlCustomParameters?: list<SecurityControlCustomParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
