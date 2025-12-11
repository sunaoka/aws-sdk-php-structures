<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\RecallBenefitApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $ClientToken
 * @property string $Identifier
 * @property string $Reason
 */
class RecallBenefitApplicationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken?: string|null,
     *     Identifier: string,
     *     Reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
