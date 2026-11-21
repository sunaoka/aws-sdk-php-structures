<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeletePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 */
class DeletePortalRequest extends Request
{
    /**
     * @param array{portalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
