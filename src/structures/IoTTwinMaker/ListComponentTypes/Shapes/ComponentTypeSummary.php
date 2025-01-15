<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $componentTypeId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 * @property string|null $description
 * @property Status|null $status
 * @property string|null $componentTypeName
 */
class ComponentTypeSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     componentTypeId: string,
     *     creationDateTime: \Aws\Api\DateTimeResult,
     *     updateDateTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     status?: Status|null,
     *     componentTypeName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
