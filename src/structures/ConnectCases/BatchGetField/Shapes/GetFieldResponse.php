<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property bool|null $deleted
 * @property string|null $description
 * @property string $fieldArn
 * @property string $fieldId
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property string $name
 * @property 'System'|'Custom' $namespace
 * @property array<string, string>|null $tags
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 */
class GetFieldResponse extends Shape
{
    /**
     * @param array{
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     deleted?: bool|null,
     *     description?: string|null,
     *     fieldArn: string,
     *     fieldId: string,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     namespace: 'System'|'Custom',
     *     tags?: array<string, string>|null,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
