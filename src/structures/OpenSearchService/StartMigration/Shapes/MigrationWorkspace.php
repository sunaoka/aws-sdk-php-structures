<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workspaceId
 * @property bool|null $createWorkspace
 * @property string|null $name
 * @property string|null $type
 */
class MigrationWorkspace extends Shape
{
    /**
     * @param array{
     *     workspaceId?: string|null,
     *     createWorkspace?: bool|null,
     *     name?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
