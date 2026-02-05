<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldId
 * @property string $fieldArn
 * @property string $name
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 * @property 'System'|'Custom' $namespace
 * @property FieldAttributes|null $attributes
 */
class FieldSummary extends Shape
{
    /**
     * @param array{
     *     fieldId: string,
     *     fieldArn: string,
     *     name: string,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User',
     *     namespace: 'System'|'Custom',
     *     attributes?: FieldAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
