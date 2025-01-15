<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $version
 */
class SlotTypeMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
