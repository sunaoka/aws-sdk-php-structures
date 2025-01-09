<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyDisassociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Target $Target
 * @property string $ConfigurationPolicyIdentifier
 */
class StartConfigurationPolicyDisassociationRequest extends Request
{
    /**
     * @param array{
     *     Target?: Shapes\Target,
     *     ConfigurationPolicyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
