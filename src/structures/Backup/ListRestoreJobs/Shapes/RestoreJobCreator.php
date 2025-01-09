<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RestoreTestingPlanArn
 */
class RestoreJobCreator extends Shape
{
    /**
     * @param array{RestoreTestingPlanArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
