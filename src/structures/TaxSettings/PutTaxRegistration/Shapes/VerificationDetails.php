<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dateOfBirth
 * @property list<TaxRegistrationDocument>|null $taxRegistrationDocuments
 */
class VerificationDetails extends Shape
{
    /**
     * @param array{
     *     dateOfBirth?: string|null,
     *     taxRegistrationDocuments?: list<TaxRegistrationDocument>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
