<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DataStore'|'Custom' $dataSourceType
 * @property string $dataTypeName
 */
class FormDataTypeConfig extends Shape
{
    /**
     * @param array{
     *     dataSourceType: 'DataStore'|'Custom',
     *     dataTypeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
