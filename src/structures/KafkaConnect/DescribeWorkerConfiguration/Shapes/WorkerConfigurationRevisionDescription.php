<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeWorkerConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property string|null $propertiesFileContent
 * @property int|null $revision
 */
class WorkerConfigurationRevisionDescription extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     propertiesFileContent?: string|null,
     *     revision?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
