<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDatabase $DatabaseInformation
 * @property string $SelectSqlQuery
 * @property RedshiftDatabaseCredentials $DatabaseCredentials
 * @property string $S3StagingLocation
 * @property string|null $DataRearrangement
 * @property string|null $DataSchema
 * @property string|null $DataSchemaUri
 */
class RedshiftDataSpec extends Shape
{
    /**
     * @param array{
     *     DatabaseInformation: RedshiftDatabase,
     *     SelectSqlQuery: string,
     *     DatabaseCredentials: RedshiftDatabaseCredentials,
     *     S3StagingLocation: string,
     *     DataRearrangement?: string|null,
     *     DataSchema?: string|null,
     *     DataSchemaUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
