<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int<1, max>|null $ActiveModelVersion
 * @property string|null $ActiveModelVersionArn
 */
class ModelSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelArn?: string|null,
     *     DatasetName?: string|null,
     *     DatasetArn?: string|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ActiveModelVersion?: int<1, max>|null,
     *     ActiveModelVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
