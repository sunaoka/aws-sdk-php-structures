<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Endpoint
 * @property CrossClusterSearchConnectionProperties|null $CrossClusterSearch
 */
class ConnectionProperties extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string|null,
     *     CrossClusterSearch?: CrossClusterSearchConnectionProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
