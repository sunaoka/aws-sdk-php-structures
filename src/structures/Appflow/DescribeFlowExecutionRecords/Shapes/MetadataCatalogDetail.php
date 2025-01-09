<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlowExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GLUE' $catalogType
 * @property string $tableName
 * @property RegistrationOutput $tableRegistrationOutput
 * @property RegistrationOutput $partitionRegistrationOutput
 */
class MetadataCatalogDetail extends Shape
{
    /**
     * @param array{
     *     catalogType?: 'GLUE',
     *     tableName?: string,
     *     tableRegistrationOutput?: RegistrationOutput,
     *     partitionRegistrationOutput?: RegistrationOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
