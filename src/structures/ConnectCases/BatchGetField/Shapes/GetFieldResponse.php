<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldId
 * @property string $name
 * @property string $fieldArn
 * @property string|null $description
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 * @property 'System'|'Custom' $namespace
 * @property array<string, string>|null $tags
 * @property bool|null $deleted
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class GetFieldResponse extends Shape
{
    /**
     * @param array{
     *     fieldId: string,
     *     name: string,
     *     fieldArn: string,
     *     description?: string|null,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User',
     *     namespace: 'System'|'Custom',
     *     tags?: array<string, string>|null,
     *     deleted?: bool|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
