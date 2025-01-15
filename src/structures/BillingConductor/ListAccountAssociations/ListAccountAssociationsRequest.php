<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListAccountAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingPeriod
 * @property Shapes\ListAccountAssociationsFilter|null $Filters
 * @property string|null $NextToken
 */
class ListAccountAssociationsRequest extends Request
{
    /**
     * @param array{
     *     BillingPeriod?: string|null,
     *     Filters?: Shapes\ListAccountAssociationsFilter|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
