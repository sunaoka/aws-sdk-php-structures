<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelChildren\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetadataModelName
 * @property string|null $SelectionRules
 */
class MetadataModelReference extends Shape
{
    /**
     * @param array{
     *     MetadataModelName?: string|null,
     *     SelectionRules?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
