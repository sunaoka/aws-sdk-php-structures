<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\ListEmailIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN' $IdentityType
 * @property string $IdentityName
 * @property bool $SendingEnabled
 */
class IdentityInfo extends Shape
{
    /**
     * @param array{
     *     IdentityType?: 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN',
     *     IdentityName?: string,
     *     SendingEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
