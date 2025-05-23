<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceId
 */
class ConnectConfiguration extends Shape
{
    /**
     * @param array{instanceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
