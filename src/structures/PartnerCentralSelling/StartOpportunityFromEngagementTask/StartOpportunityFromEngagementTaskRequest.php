<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartOpportunityFromEngagementTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Identifier
 * @property string $ContextIdentifier
 * @property list<Shapes\Tag>|null $Tags
 */
class StartOpportunityFromEngagementTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Identifier: string,
     *     ContextIdentifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
