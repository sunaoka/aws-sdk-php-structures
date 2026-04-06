<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetManagedCertificateDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetManagedCertificateDetailsRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
