<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property TextFieldControlDisplayOptions $DisplayOptions
 */
class ParameterTextFieldControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     DisplayOptions?: TextFieldControlDisplayOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
