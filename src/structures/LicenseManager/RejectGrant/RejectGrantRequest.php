<?php

namespace Sunaoka\Aws\Structures\LicenseManager\RejectGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GrantArn
 */
class RejectGrantRequest extends Request
{
    /**
     * @param array{GrantArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
