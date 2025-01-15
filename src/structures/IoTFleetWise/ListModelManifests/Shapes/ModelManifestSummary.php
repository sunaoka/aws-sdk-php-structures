<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $signalCatalogArn
 * @property string|null $description
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class ModelManifestSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     signalCatalogArn?: string|null,
     *     description?: string|null,
     *     status?: 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
