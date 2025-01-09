<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackResourceDrift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $LogicalResourceId
 */
class DetectStackResourceDriftRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     LogicalResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
