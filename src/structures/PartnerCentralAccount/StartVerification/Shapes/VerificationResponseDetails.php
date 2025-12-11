<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BusinessVerificationResponse|null $BusinessVerificationResponse
 * @property RegistrantVerificationResponse|null $RegistrantVerificationResponse
 */
class VerificationResponseDetails extends Shape
{
    /**
     * @param array{
     *     BusinessVerificationResponse?: BusinessVerificationResponse|null,
     *     RegistrantVerificationResponse?: RegistrantVerificationResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
