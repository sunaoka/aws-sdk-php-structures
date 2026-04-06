<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\AmendBenefitApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Revision
 * @property string $Identifier
 * @property string $AmendmentReason
 * @property list<Shapes\Amendment> $Amendments
 */
class AmendBenefitApplicationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Revision: string,
     *     Identifier: string,
     *     AmendmentReason: string,
     *     Amendments: list<Shapes\Amendment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
