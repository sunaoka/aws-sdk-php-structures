<?php

namespace Sunaoka\Aws\Structures\Emr\CreatePersistentAppUI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobRunId
 */
class EMRContainersConfig extends Shape
{
    /**
     * @param array{JobRunId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
