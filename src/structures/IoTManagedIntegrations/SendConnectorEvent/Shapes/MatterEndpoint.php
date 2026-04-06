<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property list<MatterCluster>|null $clusters
 */
class MatterEndpoint extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     clusters?: list<MatterCluster>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
