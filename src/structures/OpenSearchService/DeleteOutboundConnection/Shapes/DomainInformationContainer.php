<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteOutboundConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AWSDomainInformation $AWSDomainInformation
 */
class DomainInformationContainer extends Shape
{
    /**
     * @param array{AWSDomainInformation?: AWSDomainInformation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
