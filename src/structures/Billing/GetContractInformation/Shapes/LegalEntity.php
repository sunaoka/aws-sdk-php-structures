<?php

namespace Sunaoka\Aws\Structures\Billing\GetContractInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $legalEntityName
 */
class LegalEntity extends Shape
{
    /**
     * @param array{legalEntityName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
