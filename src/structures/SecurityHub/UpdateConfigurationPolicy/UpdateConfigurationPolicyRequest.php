<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConfigurationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $Name
 * @property string $Description
 * @property string $UpdatedReason
 * @property Shapes\Policy $ConfigurationPolicy
 */
class UpdateConfigurationPolicyRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Name?: string,
     *     Description?: string,
     *     UpdatedReason?: string,
     *     ConfigurationPolicy?: Shapes\Policy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
