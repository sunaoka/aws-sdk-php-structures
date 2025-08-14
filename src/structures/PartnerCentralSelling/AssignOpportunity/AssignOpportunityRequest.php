<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssignOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property Shapes\AssigneeContact $Assignee
 */
class AssignOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     Assignee: Shapes\AssigneeContact
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
