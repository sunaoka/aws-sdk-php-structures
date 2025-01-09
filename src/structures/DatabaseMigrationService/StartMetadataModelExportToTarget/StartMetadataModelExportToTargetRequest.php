<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelExportToTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 * @property bool $OverwriteExtensionPack
 */
class StartMetadataModelExportToTargetRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string,
     *     OverwriteExtensionPack?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
