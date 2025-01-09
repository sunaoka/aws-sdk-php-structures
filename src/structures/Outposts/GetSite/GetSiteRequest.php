<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 */
class GetSiteRequest extends Request
{
    /**
     * @param array{SiteId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
