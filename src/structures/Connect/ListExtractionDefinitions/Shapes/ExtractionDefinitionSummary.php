<?php

namespace Sunaoka\Aws\Structures\Connect\ListExtractionDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ExtractionDefinitionId
 * @property string $ExtractionDefinitionArn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $LastUpdatedBy
 */
class ExtractionDefinitionSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ExtractionDefinitionId: string,
     *     ExtractionDefinitionArn: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedBy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
