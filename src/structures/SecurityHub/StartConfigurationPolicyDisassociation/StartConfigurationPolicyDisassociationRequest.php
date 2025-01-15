<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartConfigurationPolicyDisassociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Target|null $Target
 * @property string $ConfigurationPolicyIdentifier
 */
class StartConfigurationPolicyDisassociationRequest extends Request
{
    /**
     * @param array{
     *     Target?: Shapes\Target|null,
     *     ConfigurationPolicyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
