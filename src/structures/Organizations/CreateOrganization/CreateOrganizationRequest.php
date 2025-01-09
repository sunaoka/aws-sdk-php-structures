<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'CONSOLIDATED_BILLING' $FeatureSet
 */
class CreateOrganizationRequest extends Request
{
    /**
     * @param array{FeatureSet?: 'ALL'|'CONSOLIDATED_BILLING'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
