<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property FormDataTypeConfig $dataType
 * @property string $environmentName
 * @property 'create'|'update' $formActionType
 * @property string $id
 * @property string $name
 */
class FormSummary extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     dataType: FormDataTypeConfig,
     *     environmentName: string,
     *     formActionType: 'create'|'update',
     *     id: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
