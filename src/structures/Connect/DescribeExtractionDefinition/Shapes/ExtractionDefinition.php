<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeExtractionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ExtractionDefinitionId
 * @property string $ExtractionDefinitionArn
 * @property ExtractionConfiguration $ExtractionConfiguration
 * @property ExtractionDefinitionDisplay|null $Display
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $LastUpdatedBy
 * @property array<string, string>|null $Tags
 */
class ExtractionDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ExtractionDefinitionId: string,
     *     ExtractionDefinitionArn: string,
     *     ExtractionConfiguration: ExtractionConfiguration,
     *     Display?: ExtractionDefinitionDisplay|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedBy: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
