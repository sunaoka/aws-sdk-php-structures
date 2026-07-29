<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeNodeName
 * @property string $taskName
 * @property array<string, string>|null $environmentVariables
 * @property list<string>|null $dependsOn
 */
class ComputeNode extends Shape
{
    /**
     * @param array{
     *     computeNodeName: string,
     *     taskName: string,
     *     environmentVariables?: array<string, string>|null,
     *     dependsOn?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
