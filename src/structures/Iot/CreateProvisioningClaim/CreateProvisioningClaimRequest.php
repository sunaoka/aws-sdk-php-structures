<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningClaim;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateName
 */
class CreateProvisioningClaimRequest extends Request
{
    /**
     * @param array{templateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
