<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackSetDrift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property Shapes\StackSetOperationPreferences $OperationPreferences
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class DetectStackSetDriftRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     OperationPreferences?: Shapes\StackSetOperationPreferences,
     *     OperationId?: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
