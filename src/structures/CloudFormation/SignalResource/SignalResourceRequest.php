<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SignalResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $LogicalResourceId
 * @property string $UniqueId
 * @property 'SUCCESS'|'FAILURE' $Status
 */
class SignalResourceRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     LogicalResourceId: string,
     *     UniqueId: string,
     *     Status: 'SUCCESS'|'FAILURE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
