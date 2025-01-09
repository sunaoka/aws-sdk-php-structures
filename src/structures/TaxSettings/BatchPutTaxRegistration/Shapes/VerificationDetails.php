<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dateOfBirth
 * @property list<TaxRegistrationDocument> $taxRegistrationDocuments
 */
class VerificationDetails extends Shape
{
    /**
     * @param array{
     *     dateOfBirth?: string,
     *     taxRegistrationDocuments?: list<TaxRegistrationDocument>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
