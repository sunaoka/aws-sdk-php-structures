<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConfigurationPolicyAssociation> $ConfigurationPolicyAssociationIdentifiers
 */
class BatchGetConfigurationPolicyAssociationsRequest extends Request
{
    /**
     * @param array{ConfigurationPolicyAssociationIdentifiers: list<Shapes\ConfigurationPolicyAssociation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
