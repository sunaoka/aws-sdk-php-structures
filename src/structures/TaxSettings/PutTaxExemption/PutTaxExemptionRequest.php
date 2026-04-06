<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxExemption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property Shapes\Authority $authority
 * @property Shapes\ExemptionCertificate $exemptionCertificate
 * @property string $exemptionType
 */
class PutTaxExemptionRequest extends Request
{
    /**
     * @param array{
     *     accountIds: list<string>,
     *     authority: Shapes\Authority,
     *     exemptionCertificate: Shapes\ExemptionCertificate,
     *     exemptionType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
