<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExecutionRoleArn
 * @property string $Description
 * @property 'ENABLED'|'DISABLED' $State
 * @property Shapes\PolicyDetails $PolicyDetails
 * @property array<string, string>|null $Tags
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     ExecutionRoleArn: string,
     *     Description: string,
     *     State: 'ENABLED'|'DISABLED',
     *     PolicyDetails: Shapes\PolicyDetails,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
