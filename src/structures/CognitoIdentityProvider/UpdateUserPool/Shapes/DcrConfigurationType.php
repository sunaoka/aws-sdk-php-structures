<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $EnableStatus
 * @property bool|null $OpenDcrEnabled
 * @property list<'code'|'implicit'|'client_credentials'>|null $AuthenticatedGrantTypes
 * @property list<'code'|'implicit'|'client_credentials'>|null $OpenDcrGrantTypes
 * @property list<string>|null $AllowedScopes
 */
class DcrConfigurationType extends Shape
{
    /**
     * @param array{
     *     EnableStatus?: 'Enabled'|'Disabled'|null,
     *     OpenDcrEnabled?: bool|null,
     *     AuthenticatedGrantTypes?: list<'code'|'implicit'|'client_credentials'>|null,
     *     OpenDcrGrantTypes?: list<'code'|'implicit'|'client_credentials'>|null,
     *     AllowedScopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
