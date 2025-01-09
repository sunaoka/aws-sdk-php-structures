<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelConversion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 */
class StartMetadataModelConversionRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
