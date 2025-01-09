<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\Policy $ConfigurationPolicy
 * @property array<string, string> $Tags
 */
class CreateConfigurationPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ConfigurationPolicy: Shapes\Policy,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
