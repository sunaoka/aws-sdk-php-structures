<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelMetadataModelConversion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $RequestIdentifier
 */
class CancelMetadataModelConversionRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     RequestIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
