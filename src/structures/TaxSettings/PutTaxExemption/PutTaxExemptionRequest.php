<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxExemption;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property Shapes\Authority $authority
 * @property string $exemptionType
 * @property Shapes\ExemptionCertificate $exemptionCertificate
 */
class PutTaxExemptionRequest extends Request
{
    /**
     * @param array{
     *     accountIds: list<string>,
     *     authority: Shapes\Authority,
     *     exemptionType: string,
     *     exemptionCertificate: Shapes\ExemptionCertificate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
