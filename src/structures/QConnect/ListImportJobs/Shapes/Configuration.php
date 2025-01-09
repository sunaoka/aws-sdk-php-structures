<?php

namespace Sunaoka\Aws\Structures\QConnect\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectConfiguration $connectConfiguration
 */
class Configuration extends Shape
{
    /**
     * @param array{connectConfiguration?: ConnectConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
