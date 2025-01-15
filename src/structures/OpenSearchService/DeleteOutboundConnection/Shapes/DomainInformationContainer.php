<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AWSDomainInformation|null $AWSDomainInformation
 */
class DomainInformationContainer extends Shape
{
    /**
     * @param array{AWSDomainInformation?: AWSDomainInformation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
