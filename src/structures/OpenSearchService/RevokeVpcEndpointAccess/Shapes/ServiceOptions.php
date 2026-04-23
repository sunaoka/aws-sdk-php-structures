<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RevokeVpcEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SupportedRegions
 */
class ServiceOptions extends Shape
{
    /**
     * @param array{SupportedRegions?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
