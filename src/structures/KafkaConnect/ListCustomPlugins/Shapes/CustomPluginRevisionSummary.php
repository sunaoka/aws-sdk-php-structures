<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAR'|'ZIP'|null $contentType
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $description
 * @property CustomPluginFileDescription|null $fileDescription
 * @property CustomPluginLocationDescription|null $location
 * @property int|null $revision
 */
class CustomPluginRevisionSummary extends Shape
{
    /**
     * @param array{
     *     contentType?: 'JAR'|'ZIP'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     fileDescription?: CustomPluginFileDescription|null,
     *     location?: CustomPluginLocationDescription|null,
     *     revision?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
