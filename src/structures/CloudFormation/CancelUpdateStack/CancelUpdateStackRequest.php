<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CancelUpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $ClientRequestToken
 */
class CancelUpdateStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
