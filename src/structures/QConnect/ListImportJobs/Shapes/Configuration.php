<?php

namespace Sunaoka\Aws\Structures\QConnect\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectConfiguration|null $connectConfiguration
 */
class Configuration extends Shape
{
    /**
     * @param array{connectConfiguration?: ConnectConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
