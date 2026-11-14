<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property Shapes\ImageBuilderAgentAccessConfigForUpdate|null $AgentAccessConfig
 * @property list<'AGENT_ACCESS_CONFIG'>|null $AttributesToDelete
 */
class UpdateImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     AgentAccessConfig?: Shapes\ImageBuilderAgentAccessConfigForUpdate|null,
     *     AttributesToDelete?: list<'AGENT_ACCESS_CONFIG'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
