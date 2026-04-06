<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessVerificationDetails|null $BusinessVerificationDetails
 * @property RegistrantVerificationDetails|null $RegistrantVerificationDetails
 */
class VerificationDetails extends Shape
{
    /**
     * @param array{
     *     BusinessVerificationDetails?: BusinessVerificationDetails|null,
     *     RegistrantVerificationDetails?: RegistrantVerificationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
