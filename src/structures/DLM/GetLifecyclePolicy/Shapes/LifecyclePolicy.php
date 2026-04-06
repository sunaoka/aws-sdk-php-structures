<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyId
 * @property string|null $Description
 * @property 'ENABLED'|'DISABLED'|'ERROR'|null $State
 * @property string|null $StatusMessage
 * @property string|null $ExecutionRoleArn
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 * @property PolicyDetails|null $PolicyDetails
 * @property array<string, string>|null $Tags
 * @property string|null $PolicyArn
 * @property bool|null $DefaultPolicy
 */
class LifecyclePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string|null,
     *     Description?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'ERROR'|null,
     *     StatusMessage?: string|null,
     *     ExecutionRoleArn?: string|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateModified?: \Aws\Api\DateTimeResult|null,
     *     PolicyDetails?: PolicyDetails|null,
     *     Tags?: array<string, string>|null,
     *     PolicyArn?: string|null,
     *     DefaultPolicy?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
