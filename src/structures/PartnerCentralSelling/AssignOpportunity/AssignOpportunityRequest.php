<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssignOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssigneeContact $Assignee
 * @property string $Catalog
 * @property string $Identifier
 */
class AssignOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Assignee: Shapes\AssigneeContact,
     *     Catalog: string,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
