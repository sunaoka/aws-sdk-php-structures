<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $Description
 * @property 'ENABLED'|'DISABLED'|'ERROR' $State
 * @property string $StatusMessage
 * @property string $ExecutionRoleArn
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 * @property PolicyDetails $PolicyDetails
 * @property array<string, string> $Tags
 * @property string $PolicyArn
 * @property bool $DefaultPolicy
 */
class LifecyclePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string,
     *     Description?: string,
     *     State?: 'ENABLED'|'DISABLED'|'ERROR',
     *     StatusMessage?: string,
     *     ExecutionRoleArn?: string,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateModified?: \Aws\Api\DateTimeResult,
     *     PolicyDetails?: PolicyDetails,
     *     Tags?: array<string, string>,
     *     PolicyArn?: string,
     *     DefaultPolicy?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
