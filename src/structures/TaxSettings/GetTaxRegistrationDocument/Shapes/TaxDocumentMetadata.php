<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistrationDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taxDocumentAccessToken
 * @property string $taxDocumentName
 */
class TaxDocumentMetadata extends Shape
{
    /**
     * @param array{
     *     taxDocumentAccessToken: string,
     *     taxDocumentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
