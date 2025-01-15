<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property string|null $Delimiter
 * @property TextAreaControlDisplayOptions|null $DisplayOptions
 */
class ParameterTextAreaControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     Delimiter?: string|null,
     *     DisplayOptions?: TextAreaControlDisplayOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
