<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property list<Shapes\EngagementContextDetails>|null $Contexts
 * @property string $Description
 * @property string $Title
 */
class CreateEngagementRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Contexts?: list<Shapes\EngagementContextDetails>|null,
     *     Description: string,
     *     Title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
