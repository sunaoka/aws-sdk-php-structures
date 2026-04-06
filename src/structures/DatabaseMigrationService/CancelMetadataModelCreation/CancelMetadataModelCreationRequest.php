<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelMetadataModelCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $RequestIdentifier
 */
class CancelMetadataModelCreationRequest extends Request
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
