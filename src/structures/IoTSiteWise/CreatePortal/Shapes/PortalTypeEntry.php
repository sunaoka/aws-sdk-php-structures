<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $portalTools
 */
class PortalTypeEntry extends Shape
{
    /**
     * @param array{portalTools?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
