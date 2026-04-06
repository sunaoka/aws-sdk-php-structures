<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $spark
 */
class WorkerComputeConfigurationProperties extends Shape
{
    /**
     * @param array{spark?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
