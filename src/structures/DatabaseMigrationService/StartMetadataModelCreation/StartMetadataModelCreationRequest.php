<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $SelectionRules
 * @property string $MetadataModelName
 * @property Shapes\MetadataModelProperties $Properties
 */
class StartMetadataModelCreationRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     SelectionRules: string,
     *     MetadataModelName: string,
     *     Properties: Shapes\MetadataModelProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
