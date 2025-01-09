<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RDSDatabase $Database
 * @property string $DatabaseUserName
 * @property string $SelectSqlQuery
 * @property string $ResourceRole
 * @property string $ServiceRole
 * @property string $DataPipelineId
 */
class RDSMetadata extends Shape
{
    /**
     * @param array{
     *     Database?: RDSDatabase,
     *     DatabaseUserName?: string,
     *     SelectSqlQuery?: string,
     *     ResourceRole?: string,
     *     ServiceRole?: string,
     *     DataPipelineId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
