<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 * @property string $Name
 * @property string $Description
 * @property string $Notes
 */
class UpdateSiteRequest extends Request
{
    /**
     * @param array{
     *     SiteId: string,
     *     Name?: string,
     *     Description?: string,
     *     Notes?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
