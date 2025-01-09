<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelExportAsScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 * @property 'SOURCE'|'TARGET' $Origin
 * @property string $FileName
 */
class StartMetadataModelExportAsScriptRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string,
     *     Origin: 'SOURCE'|'TARGET',
     *     FileName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
