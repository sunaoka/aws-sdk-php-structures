<?php

namespace Sunaoka\Aws\Structures\DataZone\GetIamPortalLoginUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 */
class GetIamPortalLoginUrlRequest extends Request
{
    /**
     * @param array{domainIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
