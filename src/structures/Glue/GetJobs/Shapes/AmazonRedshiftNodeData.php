<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessType
 * @property string $SourceType
 * @property Option $Connection
 * @property Option $Schema
 * @property Option $Table
 * @property Option $CatalogDatabase
 * @property Option $CatalogTable
 * @property string $CatalogRedshiftSchema
 * @property string $CatalogRedshiftTable
 * @property string $TempDir
 * @property Option $IamRole
 * @property list<AmazonRedshiftAdvancedOption> $AdvancedOptions
 * @property string $SampleQuery
 * @property string $PreAction
 * @property string $PostAction
 * @property string $Action
 * @property string $TablePrefix
 * @property bool $Upsert
 * @property string $MergeAction
 * @property string $MergeWhenMatched
 * @property string $MergeWhenNotMatched
 * @property string $MergeClause
 * @property string $CrawlerConnection
 * @property list<Option> $TableSchema
 * @property string $StagingTable
 * @property list<Option> $SelectedColumns
 */
class AmazonRedshiftNodeData extends Shape
{
    /**
     * @param array{
     *     AccessType?: string,
     *     SourceType?: string,
     *     Connection?: Option,
     *     Schema?: Option,
     *     Table?: Option,
     *     CatalogDatabase?: Option,
     *     CatalogTable?: Option,
     *     CatalogRedshiftSchema?: string,
     *     CatalogRedshiftTable?: string,
     *     TempDir?: string,
     *     IamRole?: Option,
     *     AdvancedOptions?: list<AmazonRedshiftAdvancedOption>,
     *     SampleQuery?: string,
     *     PreAction?: string,
     *     PostAction?: string,
     *     Action?: string,
     *     TablePrefix?: string,
     *     Upsert?: bool,
     *     MergeAction?: string,
     *     MergeWhenMatched?: string,
     *     MergeWhenNotMatched?: string,
     *     MergeClause?: string,
     *     CrawlerConnection?: string,
     *     TableSchema?: list<Option>,
     *     StagingTable?: string,
     *     SelectedColumns?: list<Option>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
