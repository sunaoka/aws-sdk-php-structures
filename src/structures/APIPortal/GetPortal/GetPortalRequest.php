<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 */
class GetPortalRequest extends Request
{
    /**
     * @param array{portalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
