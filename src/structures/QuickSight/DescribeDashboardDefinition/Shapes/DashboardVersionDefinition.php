<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

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
 * @property list<StaticFile> $StaticFiles
 */
class DashboardVersionDefinition extends Shape
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
     *     StaticFiles?: list<StaticFile>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
