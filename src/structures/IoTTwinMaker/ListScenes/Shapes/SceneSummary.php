<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListScenes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sceneId
 * @property string $contentLocation
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string $description
 */
class SceneSummary extends Shape
{
    /**
     * @param array{
     *     sceneId: string,
     *     contentLocation: string,
     *     arn: string,
     *     creationDateTime: \Aws\Api\DateTimeResult,
     *     updateDateTime: \Aws\Api\DateTimeResult,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
