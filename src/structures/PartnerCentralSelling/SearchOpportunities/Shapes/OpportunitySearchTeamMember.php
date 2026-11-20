<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $BusinessTitle
 */
class OpportunitySearchTeamMember extends Shape
{
    /**
     * @param array{
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     BusinessTitle?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
