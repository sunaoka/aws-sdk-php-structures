<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetIdentifierDeclaration> $DataSetIdentifierDeclarations
 * @property list<SheetDefinition>|null $Sheets
 * @property list<CalculatedField>|null $CalculatedFields
 * @property list<ParameterDeclaration>|null $ParameterDeclarations
 * @property list<FilterGroup>|null $FilterGroups
 * @property list<ColumnConfiguration>|null $ColumnConfigurations
 * @property AnalysisDefaults|null $AnalysisDefaults
 * @property AssetOptions|null $Options
 */
class AnalysisDefinition extends Shape
{
    /**
     * @param array{
     *     DataSetIdentifierDeclarations: list<DataSetIdentifierDeclaration>,
     *     Sheets?: list<SheetDefinition>|null,
     *     CalculatedFields?: list<CalculatedField>|null,
     *     ParameterDeclarations?: list<ParameterDeclaration>|null,
     *     FilterGroups?: list<FilterGroup>|null,
     *     ColumnConfigurations?: list<ColumnConfiguration>|null,
     *     AnalysisDefaults?: AnalysisDefaults|null,
     *     Options?: AssetOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
