<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property string $FunctionName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastModifiedAt
 * @property string $RevisionId
 * @property string $FunctionVersion
 * @property string $Role
 * @property VpcConfig $VpcConfig
 * @property list<Tag> $Tags
 */
class LambdaDetails extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string,
     *     FunctionName?: string,
     *     Description?: string,
     *     LastModifiedAt?: \Aws\Api\DateTimeResult,
     *     RevisionId?: string,
     *     FunctionVersion?: string,
     *     Role?: string,
     *     VpcConfig?: VpcConfig,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
