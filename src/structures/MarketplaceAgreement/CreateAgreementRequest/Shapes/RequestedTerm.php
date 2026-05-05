<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property RequestedTermConfiguration|null $configuration
 */
class RequestedTerm extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     configuration?: RequestedTermConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
