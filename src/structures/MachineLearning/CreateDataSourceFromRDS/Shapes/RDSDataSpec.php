<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRDS\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RDSDatabase $DatabaseInformation
 * @property string $SelectSqlQuery
 * @property RDSDatabaseCredentials $DatabaseCredentials
 * @property string $S3StagingLocation
 * @property string|null $DataRearrangement
 * @property string|null $DataSchema
 * @property string|null $DataSchemaUri
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
     *     DataRearrangement?: string|null,
     *     DataSchema?: string|null,
     *     DataSchemaUri?: string|null,
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
