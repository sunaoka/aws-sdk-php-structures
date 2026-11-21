<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationConfig $authorizationConfig
 * @property 'ENABLED'|'DISABLED' $fineGrainedAccessControl
 */
class Authorization extends Shape
{
    /**
     * @param array{
     *     authorizationConfig: AuthorizationConfig,
     *     fineGrainedAccessControl: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
