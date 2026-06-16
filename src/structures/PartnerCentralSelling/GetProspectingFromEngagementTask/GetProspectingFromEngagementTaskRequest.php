<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetProspectingFromEngagementTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $TaskIdentifier
 */
class GetProspectingFromEngagementTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     TaskIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
