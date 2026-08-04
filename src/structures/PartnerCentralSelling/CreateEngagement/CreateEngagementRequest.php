<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string|null $Title
 * @property string|null $Description
 * @property list<Shapes\EngagementContextDetails>|null $Contexts
 */
class CreateEngagementRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Title?: string|null,
     *     Description?: string|null,
     *     Contexts?: list<Shapes\EngagementContextDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
