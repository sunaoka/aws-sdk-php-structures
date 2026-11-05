<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'rolePermissions'|'sourcePermissions'|'destinationPermissions'|'resourceNotFound'|'sourceNotSupported'|'objectMigrationReport'|'objectCompatibilityReport'|'tableCompatibilityReport'|'internalError'|'reportBucketNotSupported' $code
 * @property string|null $detail
 */
class MigrationFailureReason extends Shape
{
    /**
     * @param array{
     *     code: 'rolePermissions'|'sourcePermissions'|'destinationPermissions'|'resourceNotFound'|'sourceNotSupported'|'objectMigrationReport'|'objectCompatibilityReport'|'tableCompatibilityReport'|'internalError'|'reportBucketNotSupported',
     *     detail?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
