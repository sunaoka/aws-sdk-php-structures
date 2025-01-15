<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CodeLineCount
 * @property int|null $CodeSize
 * @property string|null $Complexity
 * @property ServerShortInfoResponse|null $Server
 * @property DatabaseShortInfoResponse|null $DatabaseInstance
 * @property string|null $SchemaId
 * @property string|null $SchemaName
 * @property SchemaShortInfoResponse|null $OriginalSchema
 * @property double|null $Similarity
 */
class SchemaResponse extends Shape
{
    /**
     * @param array{
     *     CodeLineCount?: int|null,
     *     CodeSize?: int|null,
     *     Complexity?: string|null,
     *     Server?: ServerShortInfoResponse|null,
     *     DatabaseInstance?: DatabaseShortInfoResponse|null,
     *     SchemaId?: string|null,
     *     SchemaName?: string|null,
     *     OriginalSchema?: SchemaShortInfoResponse|null,
     *     Similarity?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
