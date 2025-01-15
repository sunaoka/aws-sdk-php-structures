<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\Policy $ConfigurationPolicy
 * @property array<string, string>|null $Tags
 */
class CreateConfigurationPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ConfigurationPolicy: Shapes\Policy,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
