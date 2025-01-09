<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListStateTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $signalCatalogArn
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property string $id
 */
class StateTemplateSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     signalCatalogArn?: string,
     *     description?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastModificationTime?: \Aws\Api\DateTimeResult,
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
