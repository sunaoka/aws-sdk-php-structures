<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $RollbackEnabled
 */
class ApplicationSystemRollbackConfiguration extends Shape
{
    /**
     * @param array{RollbackEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
