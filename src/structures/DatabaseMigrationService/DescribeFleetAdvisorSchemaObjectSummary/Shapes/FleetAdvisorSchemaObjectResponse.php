<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemaObjectSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaId
 * @property string|null $ObjectType
 * @property int|null $NumberOfObjects
 * @property int|null $CodeLineCount
 * @property int|null $CodeSize
 */
class FleetAdvisorSchemaObjectResponse extends Shape
{
    /**
     * @param array{
     *     SchemaId?: string|null,
     *     ObjectType?: string|null,
     *     NumberOfObjects?: int|null,
     *     CodeLineCount?: int|null,
     *     CodeSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
