<?php

namespace Sunaoka\Aws\Structures\LicenseManager\AcceptGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GrantArn
 */
class AcceptGrantRequest extends Request
{
    /**
     * @param array{GrantArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
