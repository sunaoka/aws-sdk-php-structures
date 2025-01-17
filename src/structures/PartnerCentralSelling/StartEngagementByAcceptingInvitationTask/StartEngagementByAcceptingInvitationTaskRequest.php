<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementByAcceptingInvitationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Identifier
 * @property list<Shapes\Tag>|null $Tags
 */
class StartEngagementByAcceptingInvitationTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Identifier: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
