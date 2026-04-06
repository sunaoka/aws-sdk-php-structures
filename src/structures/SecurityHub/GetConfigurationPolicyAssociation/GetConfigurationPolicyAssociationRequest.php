<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicyAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Target $Target
 */
class GetConfigurationPolicyAssociationRequest extends Request
{
    /**
     * @param array{Target: Shapes\Target} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
