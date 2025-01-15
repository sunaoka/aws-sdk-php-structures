<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaConnectorSource|null $AthenaConnectorSource
 * @property JDBCConnectorSource|null $JDBCConnectorSource
 * @property SparkConnectorSource|null $SparkConnectorSource
 * @property CatalogSource|null $CatalogSource
 * @property RedshiftSource|null $RedshiftSource
 * @property S3CatalogSource|null $S3CatalogSource
 * @property S3CsvSource|null $S3CsvSource
 * @property S3JsonSource|null $S3JsonSource
 * @property S3ParquetSource|null $S3ParquetSource
 * @property RelationalCatalogSource|null $RelationalCatalogSource
 * @property DynamoDBCatalogSource|null $DynamoDBCatalogSource
 * @property JDBCConnectorTarget|null $JDBCConnectorTarget
 * @property SparkConnectorTarget|null $SparkConnectorTarget
 * @property BasicCatalogTarget|null $CatalogTarget
 * @property RedshiftTarget|null $RedshiftTarget
 * @property S3CatalogTarget|null $S3CatalogTarget
 * @property S3GlueParquetTarget|null $S3GlueParquetTarget
 * @property S3DirectTarget|null $S3DirectTarget
 * @property ApplyMapping|null $ApplyMapping
 * @property SelectFields|null $SelectFields
 * @property DropFields|null $DropFields
 * @property RenameField|null $RenameField
 * @property Spigot|null $Spigot
 * @property Join|null $Join
 * @property SplitFields|null $SplitFields
 * @property SelectFromCollection|null $SelectFromCollection
 * @property FillMissingValues|null $FillMissingValues
 * @property Filter|null $Filter
 * @property CustomCode|null $CustomCode
 * @property SparkSQL|null $SparkSQL
 * @property DirectKinesisSource|null $DirectKinesisSource
 * @property DirectKafkaSource|null $DirectKafkaSource
 * @property CatalogKinesisSource|null $CatalogKinesisSource
 * @property CatalogKafkaSource|null $CatalogKafkaSource
 * @property DropNullFields|null $DropNullFields
 * @property Merge|null $Merge
 * @property Union|null $Union
 * @property PIIDetection|null $PIIDetection
 * @property Aggregate|null $Aggregate
 * @property DropDuplicates|null $DropDuplicates
 * @property GovernedCatalogTarget|null $GovernedCatalogTarget
 * @property GovernedCatalogSource|null $GovernedCatalogSource
 * @property MicrosoftSQLServerCatalogSource|null $MicrosoftSQLServerCatalogSource
 * @property MySQLCatalogSource|null $MySQLCatalogSource
 * @property OracleSQLCatalogSource|null $OracleSQLCatalogSource
 * @property PostgreSQLCatalogSource|null $PostgreSQLCatalogSource
 * @property MicrosoftSQLServerCatalogTarget|null $MicrosoftSQLServerCatalogTarget
 * @property MySQLCatalogTarget|null $MySQLCatalogTarget
 * @property OracleSQLCatalogTarget|null $OracleSQLCatalogTarget
 * @property PostgreSQLCatalogTarget|null $PostgreSQLCatalogTarget
 * @property DynamicTransform|null $DynamicTransform
 * @property EvaluateDataQuality|null $EvaluateDataQuality
 * @property S3CatalogHudiSource|null $S3CatalogHudiSource
 * @property CatalogHudiSource|null $CatalogHudiSource
 * @property S3HudiSource|null $S3HudiSource
 * @property S3HudiCatalogTarget|null $S3HudiCatalogTarget
 * @property S3HudiDirectTarget|null $S3HudiDirectTarget
 * @property DirectJDBCSource|null $DirectJDBCSource
 * @property S3CatalogDeltaSource|null $S3CatalogDeltaSource
 * @property CatalogDeltaSource|null $CatalogDeltaSource
 * @property S3DeltaSource|null $S3DeltaSource
 * @property S3DeltaCatalogTarget|null $S3DeltaCatalogTarget
 * @property S3DeltaDirectTarget|null $S3DeltaDirectTarget
 * @property AmazonRedshiftSource|null $AmazonRedshiftSource
 * @property AmazonRedshiftTarget|null $AmazonRedshiftTarget
 * @property EvaluateDataQualityMultiFrame|null $EvaluateDataQualityMultiFrame
 * @property Recipe|null $Recipe
 * @property SnowflakeSource|null $SnowflakeSource
 * @property SnowflakeTarget|null $SnowflakeTarget
 * @property ConnectorDataSource|null $ConnectorDataSource
 * @property ConnectorDataTarget|null $ConnectorDataTarget
 */
class CodeGenConfigurationNode extends Shape
{
    /**
     * @param array{
     *     AthenaConnectorSource?: AthenaConnectorSource|null,
     *     JDBCConnectorSource?: JDBCConnectorSource|null,
     *     SparkConnectorSource?: SparkConnectorSource|null,
     *     CatalogSource?: CatalogSource|null,
     *     RedshiftSource?: RedshiftSource|null,
     *     S3CatalogSource?: S3CatalogSource|null,
     *     S3CsvSource?: S3CsvSource|null,
     *     S3JsonSource?: S3JsonSource|null,
     *     S3ParquetSource?: S3ParquetSource|null,
     *     RelationalCatalogSource?: RelationalCatalogSource|null,
     *     DynamoDBCatalogSource?: DynamoDBCatalogSource|null,
     *     JDBCConnectorTarget?: JDBCConnectorTarget|null,
     *     SparkConnectorTarget?: SparkConnectorTarget|null,
     *     CatalogTarget?: BasicCatalogTarget|null,
     *     RedshiftTarget?: RedshiftTarget|null,
     *     S3CatalogTarget?: S3CatalogTarget|null,
     *     S3GlueParquetTarget?: S3GlueParquetTarget|null,
     *     S3DirectTarget?: S3DirectTarget|null,
     *     ApplyMapping?: ApplyMapping|null,
     *     SelectFields?: SelectFields|null,
     *     DropFields?: DropFields|null,
     *     RenameField?: RenameField|null,
     *     Spigot?: Spigot|null,
     *     Join?: Join|null,
     *     SplitFields?: SplitFields|null,
     *     SelectFromCollection?: SelectFromCollection|null,
     *     FillMissingValues?: FillMissingValues|null,
     *     Filter?: Filter|null,
     *     CustomCode?: CustomCode|null,
     *     SparkSQL?: SparkSQL|null,
     *     DirectKinesisSource?: DirectKinesisSource|null,
     *     DirectKafkaSource?: DirectKafkaSource|null,
     *     CatalogKinesisSource?: CatalogKinesisSource|null,
     *     CatalogKafkaSource?: CatalogKafkaSource|null,
     *     DropNullFields?: DropNullFields|null,
     *     Merge?: Merge|null,
     *     Union?: Union|null,
     *     PIIDetection?: PIIDetection|null,
     *     Aggregate?: Aggregate|null,
     *     DropDuplicates?: DropDuplicates|null,
     *     GovernedCatalogTarget?: GovernedCatalogTarget|null,
     *     GovernedCatalogSource?: GovernedCatalogSource|null,
     *     MicrosoftSQLServerCatalogSource?: MicrosoftSQLServerCatalogSource|null,
     *     MySQLCatalogSource?: MySQLCatalogSource|null,
     *     OracleSQLCatalogSource?: OracleSQLCatalogSource|null,
     *     PostgreSQLCatalogSource?: PostgreSQLCatalogSource|null,
     *     MicrosoftSQLServerCatalogTarget?: MicrosoftSQLServerCatalogTarget|null,
     *     MySQLCatalogTarget?: MySQLCatalogTarget|null,
     *     OracleSQLCatalogTarget?: OracleSQLCatalogTarget|null,
     *     PostgreSQLCatalogTarget?: PostgreSQLCatalogTarget|null,
     *     DynamicTransform?: DynamicTransform|null,
     *     EvaluateDataQuality?: EvaluateDataQuality|null,
     *     S3CatalogHudiSource?: S3CatalogHudiSource|null,
     *     CatalogHudiSource?: CatalogHudiSource|null,
     *     S3HudiSource?: S3HudiSource|null,
     *     S3HudiCatalogTarget?: S3HudiCatalogTarget|null,
     *     S3HudiDirectTarget?: S3HudiDirectTarget|null,
     *     DirectJDBCSource?: DirectJDBCSource|null,
     *     S3CatalogDeltaSource?: S3CatalogDeltaSource|null,
     *     CatalogDeltaSource?: CatalogDeltaSource|null,
     *     S3DeltaSource?: S3DeltaSource|null,
     *     S3DeltaCatalogTarget?: S3DeltaCatalogTarget|null,
     *     S3DeltaDirectTarget?: S3DeltaDirectTarget|null,
     *     AmazonRedshiftSource?: AmazonRedshiftSource|null,
     *     AmazonRedshiftTarget?: AmazonRedshiftTarget|null,
     *     EvaluateDataQualityMultiFrame?: EvaluateDataQualityMultiFrame|null,
     *     Recipe?: Recipe|null,
     *     SnowflakeSource?: SnowflakeSource|null,
     *     SnowflakeTarget?: SnowflakeTarget|null,
     *     ConnectorDataSource?: ConnectorDataSource|null,
     *     ConnectorDataTarget?: ConnectorDataTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
