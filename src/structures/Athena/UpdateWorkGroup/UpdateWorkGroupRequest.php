<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string|null $Description
 * @property Shapes\WorkGroupConfigurationUpdates|null $ConfigurationUpdates
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class UpdateWorkGroupRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     Description?: string|null,
     *     ConfigurationUpdates?: Shapes\WorkGroupConfigurationUpdates|null,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
