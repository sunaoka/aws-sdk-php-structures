<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRDS\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RDSDatabase $DatabaseInformation
 * @property string $SelectSqlQuery
 * @property RDSDatabaseCredentials $DatabaseCredentials
 * @property string $S3StagingLocation
 * @property string $DataRearrangement
 * @property string $DataSchema
 * @property string $DataSchemaUri
 * @property string $ResourceRole
 * @property string $ServiceRole
 * @property string $SubnetId
 * @property list<string> $SecurityGroupIds
 */
class RDSDataSpec extends Shape
{
    /**
     * @param array{
     *     DatabaseInformation: RDSDatabase,
     *     SelectSqlQuery: string,
     *     DatabaseCredentials: RDSDatabaseCredentials,
     *     S3StagingLocation: string,
     *     DataRearrangement?: string,
     *     DataSchema?: string,
     *     DataSchemaUri?: string,
     *     ResourceRole: string,
     *     ServiceRole: string,
     *     SubnetId: string,
     *     SecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
