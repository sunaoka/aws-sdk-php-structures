<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityId
 * @property string $entityName
 * @property string $arn
 * @property string $parentEntityId
 * @property Status $status
 * @property string $description
 * @property bool $hasChildEntities
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class EntitySummary extends Shape
{
    /**
     * @param array{
     *     entityId: string,
     *     entityName: string,
     *     arn: string,
     *     parentEntityId?: string,
     *     status: Status,
     *     description?: string,
     *     hasChildEntities?: bool,
     *     creationDateTime: \Aws\Api\DateTimeResult,
     *     updateDateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
