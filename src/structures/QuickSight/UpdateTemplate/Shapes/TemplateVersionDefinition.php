<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSetConfiguration> $DataSetConfigurations
 * @property list<SheetDefinition>|null $Sheets
 * @property list<CalculatedField>|null $CalculatedFields
 * @property list<ParameterDeclaration>|null $ParameterDeclarations
 * @property list<FilterGroup>|null $FilterGroups
 * @property list<ColumnConfiguration>|null $ColumnConfigurations
 * @property AnalysisDefaults|null $AnalysisDefaults
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
     *     AnalysisDefaults?: AnalysisDefaults|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
