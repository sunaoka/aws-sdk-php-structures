<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkGroup
 * @property string $Description
 * @property Shapes\WorkGroupConfigurationUpdates $ConfigurationUpdates
 * @property 'ENABLED'|'DISABLED' $State
 */
class UpdateWorkGroupRequest extends Request
{
    /**
     * @param array{
     *     WorkGroup: string,
     *     Description?: string,
     *     ConfigurationUpdates?: Shapes\WorkGroupConfigurationUpdates,
     *     State?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
