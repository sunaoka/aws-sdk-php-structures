<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementByAcceptingInvitationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string $Identifier
 */
class StartEngagementByAcceptingInvitationTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
