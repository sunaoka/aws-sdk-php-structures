<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GLUE'|null $catalogType
 * @property string|null $tableName
 * @property RegistrationOutput|null $tableRegistrationOutput
 * @property RegistrationOutput|null $partitionRegistrationOutput
 */
class MetadataCatalogDetail extends Shape
{
    /**
     * @param array{
     *     catalogType?: 'GLUE'|null,
     *     tableName?: string|null,
     *     tableRegistrationOutput?: RegistrationOutput|null,
     *     partitionRegistrationOutput?: RegistrationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
