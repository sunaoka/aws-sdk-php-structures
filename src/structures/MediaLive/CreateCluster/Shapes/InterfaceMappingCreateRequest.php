<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogicalInterfaceName
 * @property string|null $NetworkId
 */
class InterfaceMappingCreateRequest extends Shape
{
    /**
     * @param array{
     *     LogicalInterfaceName?: string|null,
     *     NetworkId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
