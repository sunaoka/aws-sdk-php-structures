<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RestoreTestingPlanArn
 */
class RestoreJobCreator extends Shape
{
    /**
     * @param array{RestoreTestingPlanArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
