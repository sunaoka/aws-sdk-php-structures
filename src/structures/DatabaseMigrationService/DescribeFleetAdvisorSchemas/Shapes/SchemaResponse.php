<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CodeLineCount
 * @property int $CodeSize
 * @property string $Complexity
 * @property ServerShortInfoResponse $Server
 * @property DatabaseShortInfoResponse $DatabaseInstance
 * @property string $SchemaId
 * @property string $SchemaName
 * @property SchemaShortInfoResponse $OriginalSchema
 * @property double $Similarity
 */
class SchemaResponse extends Shape
{
    /**
     * @param array{
     *     CodeLineCount?: int,
     *     CodeSize?: int,
     *     Complexity?: string,
     *     Server?: ServerShortInfoResponse,
     *     DatabaseInstance?: DatabaseShortInfoResponse,
     *     SchemaId?: string,
     *     SchemaName?: string,
     *     OriginalSchema?: SchemaShortInfoResponse,
     *     Similarity?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
