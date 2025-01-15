<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackSetDrift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property Shapes\StackSetOperationPreferences|null $OperationPreferences
 * @property string|null $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class DetectStackSetDriftRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences|null,
     *     OperationId?: string|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
