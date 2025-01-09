<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetIdentifierDeclaration> $DataSetIdentifierDeclarations
 * @property list<SheetDefinition> $Sheets
 * @property list<CalculatedField> $CalculatedFields
 * @property list<ParameterDeclaration> $ParameterDeclarations
 * @property list<FilterGroup> $FilterGroups
 * @property list<ColumnConfiguration> $ColumnConfigurations
 * @property AnalysisDefaults $AnalysisDefaults
 * @property AssetOptions $Options
 * @property QueryExecutionOptions $QueryExecutionOptions
 * @property list<StaticFile> $StaticFiles
 */
class AnalysisDefinition extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifierDeclarations: list<DataSetIdentifierDeclaration>,
     *     Sheets?: list<SheetDefinition>,
     *     CalculatedFields?: list<CalculatedField>,
     *     ParameterDeclarations?: list<ParameterDeclaration>,
     *     FilterGroups?: list<FilterGroup>,
     *     ColumnConfigurations?: list<ColumnConfiguration>,
     *     AnalysisDefaults?: AnalysisDefaults,
     *     Options?: AssetOptions,
     *     QueryExecutionOptions?: QueryExecutionOptions,
     *     StaticFiles?: list<StaticFile>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
