<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $GroupName
 * @property string $GroupId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     GroupName: string,
     *     GroupId: string,
     *     Arn: string,
     *     CreateDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
