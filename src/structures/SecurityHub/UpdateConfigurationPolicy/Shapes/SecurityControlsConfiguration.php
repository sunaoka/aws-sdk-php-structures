<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConfigurationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $EnabledSecurityControlIdentifiers
 * @property list<string> $DisabledSecurityControlIdentifiers
 * @property list<SecurityControlCustomParameter> $SecurityControlCustomParameters
 */
class SecurityControlsConfiguration extends Shape
{
    /**
     * @param array{
     *     EnabledSecurityControlIdentifiers?: list<string>,
     *     DisabledSecurityControlIdentifiers?: list<string>,
     *     SecurityControlCustomParameters?: list<SecurityControlCustomParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
