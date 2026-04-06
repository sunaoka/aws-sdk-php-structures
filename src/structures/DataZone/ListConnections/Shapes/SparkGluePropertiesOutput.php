<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SparkGlueArgs|null $additionalArgs
 * @property string|null $glueConnectionName
 * @property string|null $glueVersion
 * @property int|null $idleTimeout
 * @property string|null $javaVirtualEnv
 * @property int|null $numberOfWorkers
 * @property string|null $pythonVirtualEnv
 * @property string|null $workerType
 */
class SparkGluePropertiesOutput extends Shape
{
    /**
     * @param array{
     *     additionalArgs?: SparkGlueArgs|null,
     *     glueConnectionName?: string|null,
     *     glueVersion?: string|null,
     *     idleTimeout?: int|null,
     *     javaVirtualEnv?: string|null,
     *     numberOfWorkers?: int|null,
     *     pythonVirtualEnv?: string|null,
     *     workerType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
