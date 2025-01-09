<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $portalTools
 */
class PortalTypeEntry extends Shape
{
    /**
     * @param array{portalTools?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
