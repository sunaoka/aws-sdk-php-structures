<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Title
 * @property string $Description
 * @property list<Shapes\EngagementContextDetails>|null $Contexts
 */
class CreateEngagementRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Title: string,
     *     Description: string,
     *     Contexts?: list<Shapes\EngagementContextDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
