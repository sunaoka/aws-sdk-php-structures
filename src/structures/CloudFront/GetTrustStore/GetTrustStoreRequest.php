<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetTrustStoreRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
