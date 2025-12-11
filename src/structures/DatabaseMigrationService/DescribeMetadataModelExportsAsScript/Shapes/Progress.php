<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsAsScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ProgressPercent
 * @property int|null $TotalObjects
 * @property string|null $ProgressStep
 * @property ProcessedObject|null $ProcessedObject
 */
class Progress extends Shape
{
    /**
     * @param array{
     *     ProgressPercent?: double|null,
     *     TotalObjects?: int|null,
     *     ProgressStep?: string|null,
     *     ProcessedObject?: ProcessedObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
