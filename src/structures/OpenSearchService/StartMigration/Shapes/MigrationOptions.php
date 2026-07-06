<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MigrationSource $source
 * @property MigrationWorkspace $workspace
 * @property ExportOptions|null $exportOptions
 * @property string|null $conflictResolution
 */
class MigrationOptions extends Shape
{
    /**
     * @param array{
     *     source: MigrationSource,
     *     workspace: MigrationWorkspace,
     *     exportOptions?: ExportOptions|null,
     *     conflictResolution?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
