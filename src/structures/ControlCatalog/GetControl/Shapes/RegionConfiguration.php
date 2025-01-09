<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GLOBAL'|'REGIONAL' $Scope
 * @property list<string> $DeployableRegions
 */
class RegionConfiguration extends Shape
{
    /**
     * @param array{
     *     Scope: 'GLOBAL'|'REGIONAL',
     *     DeployableRegions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
