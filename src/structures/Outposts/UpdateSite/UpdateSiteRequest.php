<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SiteId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Notes
 */
class UpdateSiteRequest extends Request
{
    /**
     * @param array{
     *     SiteId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Notes?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
