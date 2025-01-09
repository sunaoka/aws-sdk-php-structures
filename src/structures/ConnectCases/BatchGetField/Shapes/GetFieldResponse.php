<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property bool $deleted
 * @property string $description
 * @property string $fieldArn
 * @property string $fieldId
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $name
 * @property 'System'|'Custom' $namespace
 * @property array<string, string> $tags
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 */
class GetFieldResponse extends Shape
{
    /**
     * @param array{
     *     createdTime?: \Aws\Api\DateTimeResult,
     *     deleted?: bool,
     *     description?: string,
     *     fieldArn: string,
     *     fieldId: string,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     namespace: 'System'|'Custom',
     *     tags?: array<string, string>,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
