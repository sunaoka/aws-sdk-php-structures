<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAR'|'ZIP' $contentType
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property CustomPluginFileDescription $fileDescription
 * @property CustomPluginLocationDescription $location
 * @property int $revision
 */
class CustomPluginRevisionSummary extends Shape
{
    /**
     * @param array{
     *     contentType?: 'JAR'|'ZIP',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     fileDescription?: CustomPluginFileDescription,
     *     location?: CustomPluginLocationDescription,
     *     revision?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
