<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationPolicyIdentifier
 * @property Shapes\Target $Target
 */
class StartConfigurationPolicyAssociationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationPolicyIdentifier: string,
     *     Target: Shapes\Target
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
