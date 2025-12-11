<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\DisassociateBenefitApplicationResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $BenefitApplicationIdentifier
 * @property string $ResourceArn
 */
class DisassociateBenefitApplicationResourceRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     BenefitApplicationIdentifier: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
