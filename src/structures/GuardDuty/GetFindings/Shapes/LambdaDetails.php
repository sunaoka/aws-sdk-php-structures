<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionArn
 * @property string|null $FunctionName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastModifiedAt
 * @property string|null $RevisionId
 * @property string|null $FunctionVersion
 * @property string|null $Role
 * @property VpcConfig|null $VpcConfig
 * @property list<Tag>|null $Tags
 */
class LambdaDetails extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string|null,
     *     FunctionName?: string|null,
     *     Description?: string|null,
     *     LastModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     RevisionId?: string|null,
     *     FunctionVersion?: string|null,
     *     Role?: string|null,
     *     VpcConfig?: VpcConfig|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
