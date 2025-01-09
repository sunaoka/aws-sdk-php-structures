<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $version
 */
class SlotTypeMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
