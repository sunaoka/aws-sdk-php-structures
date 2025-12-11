<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\CancelBenefitApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Identifier
 * @property string|null $Reason
 */
class CancelBenefitApplicationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Identifier: string,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
