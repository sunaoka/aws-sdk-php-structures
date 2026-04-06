<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListStateTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $signalCatalogArn
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModificationTime
 * @property string|null $id
 */
class StateTemplateSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     signalCatalogArn?: string|null,
     *     description?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastModificationTime?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
