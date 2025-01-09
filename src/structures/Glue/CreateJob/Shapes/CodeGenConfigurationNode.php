<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaConnectorSource $AthenaConnectorSource
 * @property JDBCConnectorSource $JDBCConnectorSource
 * @property SparkConnectorSource $SparkConnectorSource
 * @property CatalogSource $CatalogSource
 * @property RedshiftSource $RedshiftSource
 * @property S3CatalogSource $S3CatalogSource
 * @property S3CsvSource $S3CsvSource
 * @property S3JsonSource $S3JsonSource
 * @property S3ParquetSource $S3ParquetSource
 * @property RelationalCatalogSource $RelationalCatalogSource
 * @property DynamoDBCatalogSource $DynamoDBCatalogSource
 * @property JDBCConnectorTarget $JDBCConnectorTarget
 * @property SparkConnectorTarget $SparkConnectorTarget
 * @property BasicCatalogTarget $CatalogTarget
 * @property RedshiftTarget $RedshiftTarget
 * @property S3CatalogTarget $S3CatalogTarget
 * @property S3GlueParquetTarget $S3GlueParquetTarget
 * @property S3DirectTarget $S3DirectTarget
 * @property ApplyMapping $ApplyMapping
 * @property SelectFields $SelectFields
 * @property DropFields $DropFields
 * @property RenameField $RenameField
 * @property Spigot $Spigot
 * @property Join $Join
 * @property SplitFields $SplitFields
 * @property SelectFromCollection $SelectFromCollection
 * @property FillMissingValues $FillMissingValues
 * @property Filter $Filter
 * @property CustomCode $CustomCode
 * @property SparkSQL $SparkSQL
 * @property DirectKinesisSource $DirectKinesisSource
 * @property DirectKafkaSource $DirectKafkaSource
 * @property CatalogKinesisSource $CatalogKinesisSource
 * @property CatalogKafkaSource $CatalogKafkaSource
 * @property DropNullFields $DropNullFields
 * @property Merge $Merge
 * @property Union $Union
 * @property PIIDetection $PIIDetection
 * @property Aggregate $Aggregate
 * @property DropDuplicates $DropDuplicates
 * @property GovernedCatalogTarget $GovernedCatalogTarget
 * @property GovernedCatalogSource $GovernedCatalogSource
 * @property MicrosoftSQLServerCatalogSource $MicrosoftSQLServerCatalogSource
 * @property MySQLCatalogSource $MySQLCatalogSource
 * @property OracleSQLCatalogSource $OracleSQLCatalogSource
 * @property PostgreSQLCatalogSource $PostgreSQLCatalogSource
 * @property MicrosoftSQLServerCatalogTarget $MicrosoftSQLServerCatalogTarget
 * @property MySQLCatalogTarget $MySQLCatalogTarget
 * @property OracleSQLCatalogTarget $OracleSQLCatalogTarget
 * @property PostgreSQLCatalogTarget $PostgreSQLCatalogTarget
 * @property DynamicTransform $DynamicTransform
 * @property EvaluateDataQuality $EvaluateDataQuality
 * @property S3CatalogHudiSource $S3CatalogHudiSource
 * @property CatalogHudiSource $CatalogHudiSource
 * @property S3HudiSource $S3HudiSource
 * @property S3HudiCatalogTarget $S3HudiCatalogTarget
 * @property S3HudiDirectTarget $S3HudiDirectTarget
 * @property DirectJDBCSource $DirectJDBCSource
 * @property S3CatalogDeltaSource $S3CatalogDeltaSource
 * @property CatalogDeltaSource $CatalogDeltaSource
 * @property S3DeltaSource $S3DeltaSource
 * @property S3DeltaCatalogTarget $S3DeltaCatalogTarget
 * @property S3DeltaDirectTarget $S3DeltaDirectTarget
 * @property AmazonRedshiftSource $AmazonRedshiftSource
 * @property AmazonRedshiftTarget $AmazonRedshiftTarget
 * @property EvaluateDataQualityMultiFrame $EvaluateDataQualityMultiFrame
 * @property Recipe $Recipe
 * @property SnowflakeSource $SnowflakeSource
 * @property SnowflakeTarget $SnowflakeTarget
 * @property ConnectorDataSource $ConnectorDataSource
 * @property ConnectorDataTarget $ConnectorDataTarget
 */
class CodeGenConfigurationNode extends Shape
{
    /**
     * @param array{
     *     AthenaConnectorSource?: AthenaConnectorSource,
     *     JDBCConnectorSource?: JDBCConnectorSource,
     *     SparkConnectorSource?: SparkConnectorSource,
     *     CatalogSource?: CatalogSource,
     *     RedshiftSource?: RedshiftSource,
     *     S3CatalogSource?: S3CatalogSource,
     *     S3CsvSource?: S3CsvSource,
     *     S3JsonSource?: S3JsonSource,
     *     S3ParquetSource?: S3ParquetSource,
     *     RelationalCatalogSource?: RelationalCatalogSource,
     *     DynamoDBCatalogSource?: DynamoDBCatalogSource,
     *     JDBCConnectorTarget?: JDBCConnectorTarget,
     *     SparkConnectorTarget?: SparkConnectorTarget,
     *     CatalogTarget?: BasicCatalogTarget,
     *     RedshiftTarget?: RedshiftTarget,
     *     S3CatalogTarget?: S3CatalogTarget,
     *     S3GlueParquetTarget?: S3GlueParquetTarget,
     *     S3DirectTarget?: S3DirectTarget,
     *     ApplyMapping?: ApplyMapping,
     *     SelectFields?: SelectFields,
     *     DropFields?: DropFields,
     *     RenameField?: RenameField,
     *     Spigot?: Spigot,
     *     Join?: Join,
     *     SplitFields?: SplitFields,
     *     SelectFromCollection?: SelectFromCollection,
     *     FillMissingValues?: FillMissingValues,
     *     Filter?: Filter,
     *     CustomCode?: CustomCode,
     *     SparkSQL?: SparkSQL,
     *     DirectKinesisSource?: DirectKinesisSource,
     *     DirectKafkaSource?: DirectKafkaSource,
     *     CatalogKinesisSource?: CatalogKinesisSource,
     *     CatalogKafkaSource?: CatalogKafkaSource,
     *     DropNullFields?: DropNullFields,
     *     Merge?: Merge,
     *     Union?: Union,
     *     PIIDetection?: PIIDetection,
     *     Aggregate?: Aggregate,
     *     DropDuplicates?: DropDuplicates,
     *     GovernedCatalogTarget?: GovernedCatalogTarget,
     *     GovernedCatalogSource?: GovernedCatalogSource,
     *     MicrosoftSQLServerCatalogSource?: MicrosoftSQLServerCatalogSource,
     *     MySQLCatalogSource?: MySQLCatalogSource,
     *     OracleSQLCatalogSource?: OracleSQLCatalogSource,
     *     PostgreSQLCatalogSource?: PostgreSQLCatalogSource,
     *     MicrosoftSQLServerCatalogTarget?: MicrosoftSQLServerCatalogTarget,
     *     MySQLCatalogTarget?: MySQLCatalogTarget,
     *     OracleSQLCatalogTarget?: OracleSQLCatalogTarget,
     *     PostgreSQLCatalogTarget?: PostgreSQLCatalogTarget,
     *     DynamicTransform?: DynamicTransform,
     *     EvaluateDataQuality?: EvaluateDataQuality,
     *     S3CatalogHudiSource?: S3CatalogHudiSource,
     *     CatalogHudiSource?: CatalogHudiSource,
     *     S3HudiSource?: S3HudiSource,
     *     S3HudiCatalogTarget?: S3HudiCatalogTarget,
     *     S3HudiDirectTarget?: S3HudiDirectTarget,
     *     DirectJDBCSource?: DirectJDBCSource,
     *     S3CatalogDeltaSource?: S3CatalogDeltaSource,
     *     CatalogDeltaSource?: CatalogDeltaSource,
     *     S3DeltaSource?: S3DeltaSource,
     *     S3DeltaCatalogTarget?: S3DeltaCatalogTarget,
     *     S3DeltaDirectTarget?: S3DeltaDirectTarget,
     *     AmazonRedshiftSource?: AmazonRedshiftSource,
     *     AmazonRedshiftTarget?: AmazonRedshiftTarget,
     *     EvaluateDataQualityMultiFrame?: EvaluateDataQualityMultiFrame,
     *     Recipe?: Recipe,
     *     SnowflakeSource?: SnowflakeSource,
     *     SnowflakeTarget?: SnowflakeTarget,
     *     ConnectorDataSource?: ConnectorDataSource,
     *     ConnectorDataTarget?: ConnectorDataTarget
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
