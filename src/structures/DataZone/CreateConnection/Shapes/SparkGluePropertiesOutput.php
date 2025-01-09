<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SparkGlueArgs $additionalArgs
 * @property string $glueConnectionName
 * @property string $glueVersion
 * @property int $idleTimeout
 * @property string $javaVirtualEnv
 * @property int $numberOfWorkers
 * @property string $pythonVirtualEnv
 * @property string $workerType
 */
class SparkGluePropertiesOutput extends Shape
{
    /**
     * @param array{
     *     additionalArgs?: SparkGlueArgs,
     *     glueConnectionName?: string,
     *     glueVersion?: string,
     *     idleTimeout?: int,
     *     javaVirtualEnv?: string,
     *     numberOfWorkers?: int,
     *     pythonVirtualEnv?: string,
     *     workerType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
