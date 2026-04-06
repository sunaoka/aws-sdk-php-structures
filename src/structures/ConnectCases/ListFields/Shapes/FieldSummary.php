<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldArn
 * @property string $fieldId
 * @property string $name
 * @property 'System'|'Custom' $namespace
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 */
class FieldSummary extends Shape
{
    /**
     * @param array{
     *     fieldArn: string,
     *     fieldId: string,
     *     name: string,
     *     namespace: 'System'|'Custom',
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
