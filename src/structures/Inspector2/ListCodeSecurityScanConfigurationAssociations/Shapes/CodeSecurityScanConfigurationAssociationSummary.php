<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityScanConfigurationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeSecurityResource|null $resource
 */
class CodeSecurityScanConfigurationAssociationSummary extends Shape
{
    /**
     * @param array{resource?: CodeSecurityResource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
