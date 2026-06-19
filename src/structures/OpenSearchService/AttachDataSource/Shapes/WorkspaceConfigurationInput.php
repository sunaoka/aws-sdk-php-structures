<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AttachDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $workspaceType
 */
class WorkspaceConfigurationInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     workspaceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
