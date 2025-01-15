<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 720>|null $EdgeRetentionInHours
 * @property LocalSizeConfig|null $LocalSizeConfig
 * @property bool|null $DeleteAfterUpload
 */
class DeletionConfig extends Shape
{
    /**
     * @param array{
     *     EdgeRetentionInHours?: int<1, 720>|null,
     *     LocalSizeConfig?: LocalSizeConfig|null,
     *     DeleteAfterUpload?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
