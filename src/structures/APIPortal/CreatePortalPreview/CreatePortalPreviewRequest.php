<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreatePortalPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 */
class CreatePortalPreviewRequest extends Request
{
    /**
     * @param array{portalId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
