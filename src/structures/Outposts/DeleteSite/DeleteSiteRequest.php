<?php

namespace Sunaoka\Aws\Structures\Outposts\DeleteSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 */
class DeleteSiteRequest extends Request
{
    /**
     * @param array{SiteId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
