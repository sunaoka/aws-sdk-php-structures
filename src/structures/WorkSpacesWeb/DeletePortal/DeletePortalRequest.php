<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeletePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DeletePortalRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
