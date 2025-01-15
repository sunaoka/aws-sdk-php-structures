<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL'|'CONSOLIDATED_BILLING'|null $FeatureSet
 */
class CreateOrganizationRequest extends Request
{
    /**
     * @param array{FeatureSet?: 'ALL'|'CONSOLIDATED_BILLING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
