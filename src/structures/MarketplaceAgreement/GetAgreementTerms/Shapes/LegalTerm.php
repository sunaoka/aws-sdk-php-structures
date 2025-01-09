<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentItem> $documents
 * @property string $type
 */
class LegalTerm extends Shape
{
    /**
     * @param array{
     *     documents?: list<DocumentItem>,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
