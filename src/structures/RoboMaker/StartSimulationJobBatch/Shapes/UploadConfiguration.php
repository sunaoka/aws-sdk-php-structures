<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $path
 * @property 'UPLOAD_ON_TERMINATE'|'UPLOAD_ROLLING_AUTO_REMOVE' $uploadBehavior
 */
class UploadConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     path: string,
     *     uploadBehavior: 'UPLOAD_ON_TERMINATE'|'UPLOAD_ROLLING_AUTO_REMOVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
