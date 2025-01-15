<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityId
 * @property string $entityName
 * @property string $arn
 * @property string|null $parentEntityId
 * @property Status $status
 * @property string|null $description
 * @property bool|null $hasChildEntities
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
     *     parentEntityId?: string|null,
     *     status: Status,
     *     description?: string|null,
     *     hasChildEntities?: bool|null,
     *     creationDateTime: \Aws\Api\DateTimeResult,
     *     updateDateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
