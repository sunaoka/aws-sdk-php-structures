<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 */
class GetTrustAnchorRequest extends Request
{
    /**
     * @param array{trustAnchorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
