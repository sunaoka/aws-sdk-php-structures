<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackDrift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<string> $LogicalResourceIds
 */
class DetectStackDriftRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     LogicalResourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
