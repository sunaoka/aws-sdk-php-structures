<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $signalCatalogArn
 * @property string $description
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class ModelManifestSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     signalCatalogArn?: string,
     *     description?: string,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
