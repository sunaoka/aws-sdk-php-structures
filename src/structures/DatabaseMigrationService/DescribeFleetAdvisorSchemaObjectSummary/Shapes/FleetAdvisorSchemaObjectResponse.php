<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemaObjectSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaId
 * @property string $ObjectType
 * @property int $NumberOfObjects
 * @property int $CodeLineCount
 * @property int $CodeSize
 */
class FleetAdvisorSchemaObjectResponse extends Shape
{
    /**
     * @param array{
     *     SchemaId?: string,
     *     ObjectType?: string,
     *     NumberOfObjects?: int,
     *     CodeLineCount?: int,
     *     CodeSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
