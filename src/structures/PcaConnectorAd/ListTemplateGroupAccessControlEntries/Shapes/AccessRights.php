<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplateGroupAccessControlEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY' $AutoEnroll
 * @property 'ALLOW'|'DENY' $Enroll
 */
class AccessRights extends Shape
{
    /**
     * @param array{
     *     AutoEnroll?: 'ALLOW'|'DENY',
     *     Enroll?: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
