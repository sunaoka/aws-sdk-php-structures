<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EdgeRetentionInHours
 * @property LocalSizeConfig $LocalSizeConfig
 * @property bool $DeleteAfterUpload
 */
class DeletionConfig extends Shape
{
    /**
     * @param array{
     *     EdgeRetentionInHours?: int,
     *     LocalSizeConfig?: LocalSizeConfig,
     *     DeleteAfterUpload?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
