<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentItem>|null $documents
 * @property string|null $type
 */
class LegalTerm extends Shape
{
    /**
     * @param array{
     *     documents?: list<DocumentItem>|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
