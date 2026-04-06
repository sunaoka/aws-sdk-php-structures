<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModelAgreementOffers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementDuration
 */
class ValidityTerm extends Shape
{
    /**
     * @param array{agreementDuration?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
