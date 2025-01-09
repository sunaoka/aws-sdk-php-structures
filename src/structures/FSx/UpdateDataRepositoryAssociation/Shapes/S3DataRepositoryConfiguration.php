<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateDataRepositoryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoImportPolicy $AutoImportPolicy
 * @property AutoExportPolicy $AutoExportPolicy
 */
class S3DataRepositoryConfiguration extends Shape
{
    /**
     * @param array{
     *     AutoImportPolicy?: AutoImportPolicy,
     *     AutoExportPolicy?: AutoExportPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
