<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeWorkerConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property string $propertiesFileContent
 * @property int $revision
 */
class WorkerConfigurationRevisionDescription extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     propertiesFileContent?: string,
     *     revision?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
