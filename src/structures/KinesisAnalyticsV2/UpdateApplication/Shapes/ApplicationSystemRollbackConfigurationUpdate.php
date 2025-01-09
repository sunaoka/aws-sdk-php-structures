<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $RollbackEnabledUpdate
 */
class ApplicationSystemRollbackConfigurationUpdate extends Shape
{
    /**
     * @param array{RollbackEnabledUpdate: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
