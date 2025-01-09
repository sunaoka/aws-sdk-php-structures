<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SnapshotsEnabledUpdate
 */
class ApplicationSnapshotConfigurationUpdate extends Shape
{
    /**
     * @param array{SnapshotsEnabledUpdate: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
