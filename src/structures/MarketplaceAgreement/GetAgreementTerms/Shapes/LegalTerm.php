<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $id
 * @property list<DocumentItem>|null $documents
 */
class LegalTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     id?: string|null,
     *     documents?: list<DocumentItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
