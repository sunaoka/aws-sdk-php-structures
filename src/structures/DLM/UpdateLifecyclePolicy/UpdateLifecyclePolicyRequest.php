<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $ExecutionRoleArn
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $Description
 * @property Shapes\PolicyDetails|null $PolicyDetails
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     ExecutionRoleArn?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|null,
     *     Description?: string|null,
     *     PolicyDetails?: Shapes\PolicyDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
