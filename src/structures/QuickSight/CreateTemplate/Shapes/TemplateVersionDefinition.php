<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetConfiguration> $DataSetConfigurations
 * @property list<SheetDefinition>|null $Sheets
 * @property list<CalculatedField>|null $CalculatedFields
 * @property list<ParameterDeclaration>|null $ParameterDeclarations
 * @property list<FilterGroup>|null $FilterGroups
 * @property list<ColumnConfiguration>|null $ColumnConfigurations
 * @property AnalysisDefaults|null $AnalysisDefaults
 * @property AssetOptions|null $Options
 * @property QueryExecutionOptions|null $QueryExecutionOptions
 * @property list<StaticFile>|null $StaticFiles
 */
class TemplateVersionDefinition extends Shape
{
    /**
     * @param array{
     *     DataSetConfigurations: list<DataSetConfiguration>,
     *     Sheets?: list<SheetDefinition>|null,
     *     CalculatedFields?: list<CalculatedField>|null,
     *     ParameterDeclarations?: list<ParameterDeclaration>|null,
     *     FilterGroups?: list<FilterGroup>|null,
     *     ColumnConfigurations?: list<ColumnConfiguration>|null,
     *     AnalysisDefaults?: AnalysisDefaults|null,
     *     Options?: AssetOptions|null,
     *     QueryExecutionOptions?: QueryExecutionOptions|null,
     *     StaticFiles?: list<StaticFile>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
