<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartProspectingFromEngagementTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $Identifiers
 * @property string $TaskName
 * @property string $ClientToken
 */
class StartProspectingFromEngagementTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifiers: list<string>,
     *     TaskName: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
