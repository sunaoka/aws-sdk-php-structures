<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $version
 */
class AppMonitorDetails extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
