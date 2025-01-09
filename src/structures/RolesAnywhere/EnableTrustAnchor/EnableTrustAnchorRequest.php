<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 */
class EnableTrustAnchorRequest extends Request
{
    /**
     * @param array{trustAnchorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
