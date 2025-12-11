<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessVerificationDetails $BusinessVerificationDetails
 */
class BusinessVerificationResponse extends Shape
{
    /**
     * @param array{BusinessVerificationDetails: BusinessVerificationDetails} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
