<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property CrossClusterSearchConnectionProperties $CrossClusterSearch
 */
class ConnectionProperties extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string,
     *     CrossClusterSearch?: CrossClusterSearchConnectionProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
