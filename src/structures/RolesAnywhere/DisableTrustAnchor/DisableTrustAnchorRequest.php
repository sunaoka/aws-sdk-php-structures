<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 */
class DisableTrustAnchorRequest extends Request
{
    /**
     * @param array{trustAnchorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
