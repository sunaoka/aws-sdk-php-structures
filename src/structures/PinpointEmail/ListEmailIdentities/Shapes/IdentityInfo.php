<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\ListEmailIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null $IdentityType
 * @property string|null $IdentityName
 * @property bool|null $SendingEnabled
 */
class IdentityInfo extends Shape
{
    /**
     * @param array{
     *     IdentityType?: 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null,
     *     IdentityName?: string|null,
     *     SendingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
