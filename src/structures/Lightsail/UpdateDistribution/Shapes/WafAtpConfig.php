<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $loginPath
 * @property 'JSON'|'FORM_ENCODED'|null $payloadType
 * @property string|null $usernameField
 * @property string|null $passwordField
 * @property WafResponseInspection|null $responseInspection
 */
class WafAtpConfig extends Shape
{
    /**
     * @param array{
     *     loginPath?: string|null,
     *     payloadType?: 'JSON'|'FORM_ENCODED'|null,
     *     usernameField?: string|null,
     *     passwordField?: string|null,
     *     responseInspection?: WafResponseInspection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
