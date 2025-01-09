<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 720> $EdgeRetentionInHours
 * @property LocalSizeConfig $LocalSizeConfig
 * @property bool $DeleteAfterUpload
 */
class DeletionConfig extends Shape
{
    /**
     * @param array{
     *     EdgeRetentionInHours?: int<1, 720>,
     *     LocalSizeConfig?: LocalSizeConfig,
     *     DeleteAfterUpload?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
