<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'REQUIRE_DIGIT'|'REQUIRE_LOWERCASE'|'REQUIRE_SYMBOL'|'REQUIRE_UPPERCASE'> $AdditionalConstraints
 * @property double $MinimumLength
 */
class UpdateBackendAuthPasswordPolicyConfig extends Shape
{
    /**
     * @param array{
     *     AdditionalConstraints?: list<'REQUIRE_DIGIT'|'REQUIRE_LOWERCASE'|'REQUIRE_SYMBOL'|'REQUIRE_UPPERCASE'>,
     *     MinimumLength?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
