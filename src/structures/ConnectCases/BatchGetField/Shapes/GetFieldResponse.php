<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $fieldArn
 * @property string $fieldId
 * @property string $name
 * @property 'System'|'Custom' $namespace
 * @property array<string, string>|null $tags
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url' $type
 */
class GetFieldResponse extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     fieldArn: string,
     *     fieldId: string,
     *     name: string,
     *     namespace: 'System'|'Custom',
     *     tags?: array<string, string>|null,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
