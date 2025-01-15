<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RDSDatabase|null $Database
 * @property string|null $DatabaseUserName
 * @property string|null $SelectSqlQuery
 * @property string|null $ResourceRole
 * @property string|null $ServiceRole
 * @property string|null $DataPipelineId
 */
class RDSMetadata extends Shape
{
    /**
     * @param array{
     *     Database?: RDSDatabase|null,
     *     DatabaseUserName?: string|null,
     *     SelectSqlQuery?: string|null,
     *     ResourceRole?: string|null,
     *     ServiceRole?: string|null,
     *     DataPipelineId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
