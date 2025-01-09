<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspaceArn
 */
class AmpConfiguration extends Shape
{
    /**
     * @param array{workspaceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
