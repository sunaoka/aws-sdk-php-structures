<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoImportPolicy|null $AutoImportPolicy
 * @property AutoExportPolicy|null $AutoExportPolicy
 */
class S3DataRepositoryConfiguration extends Shape
{
    /**
     * @param array{
     *     AutoImportPolicy?: AutoImportPolicy|null,
     *     AutoExportPolicy?: AutoExportPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
