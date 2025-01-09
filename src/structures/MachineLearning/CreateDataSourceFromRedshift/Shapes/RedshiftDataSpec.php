<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDatabase $DatabaseInformation
 * @property string $SelectSqlQuery
 * @property RedshiftDatabaseCredentials $DatabaseCredentials
 * @property string $S3StagingLocation
 * @property string $DataRearrangement
 * @property string $DataSchema
 * @property string $DataSchemaUri
 */
class RedshiftDataSpec extends Shape
{
    /**
     * @param array{
     *     DatabaseInformation: RedshiftDatabase,
     *     SelectSqlQuery: string,
     *     DatabaseCredentials: RedshiftDatabaseCredentials,
     *     S3StagingLocation: string,
     *     DataRearrangement?: string,
     *     DataSchema?: string,
     *     DataSchemaUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
