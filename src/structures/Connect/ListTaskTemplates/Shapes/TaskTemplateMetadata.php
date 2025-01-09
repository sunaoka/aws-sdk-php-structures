<?php

namespace Sunaoka\Aws\Structures\Connect\ListTaskTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class TaskTemplateMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
