<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplateGroupAccessControlEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY'|null $AutoEnroll
 * @property 'ALLOW'|'DENY'|null $Enroll
 */
class AccessRights extends Shape
{
    /**
     * @param array{
     *     AutoEnroll?: 'ALLOW'|'DENY'|null,
     *     Enroll?: 'ALLOW'|'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
