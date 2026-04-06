<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LegalName
 * @property string $RegistrationId
 * @property string $CountryCode
 * @property string|null $JurisdictionOfIncorporation
 */
class BusinessVerificationDetails extends Shape
{
    /**
     * @param array{
     *     LegalName: string,
     *     RegistrationId: string,
     *     CountryCode: string,
     *     JurisdictionOfIncorporation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
