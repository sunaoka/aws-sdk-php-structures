<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListAccountAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BillingPeriod
 * @property Shapes\ListAccountAssociationsFilter $Filters
 * @property string $NextToken
 */
class ListAccountAssociationsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string,
     *     Filters?: Shapes\ListAccountAssociationsFilter,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
