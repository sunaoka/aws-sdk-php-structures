<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ManagedInstanceRequest $ManagedInstance
 * @property Shapes\BillingConfiguration|null $BillingConfiguration
 */
class CreateWorkspaceInstanceRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ManagedInstance: Shapes\ManagedInstanceRequest,
     *     BillingConfiguration?: Shapes\BillingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
