<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConfigurationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $UpdatedReason
 * @property Shapes\Policy|null $ConfigurationPolicy
 */
class UpdateConfigurationPolicyRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     UpdatedReason?: string|null,
     *     ConfigurationPolicy?: Shapes\Policy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
