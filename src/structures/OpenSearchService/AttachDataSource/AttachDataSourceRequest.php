<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AttachDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $dataSourceArn
 * @property string|null $workspaceId
 * @property Shapes\WorkspaceConfigurationInput|null $workspaceConfiguration
 * @property string|null $clientToken
 */
class AttachDataSourceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     dataSourceArn: string,
     *     workspaceId?: string|null,
     *     workspaceConfiguration?: Shapes\WorkspaceConfigurationInput|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
