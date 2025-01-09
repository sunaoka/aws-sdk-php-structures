<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogicalInterfaceName
 * @property string $NetworkId
 */
class InterfaceMappingUpdateRequest extends Shape
{
    /**
     * @param array{
     *     LogicalInterfaceName?: string,
     *     NetworkId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
