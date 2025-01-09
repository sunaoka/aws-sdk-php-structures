<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointPolicyForObjectLambda;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 */
class GetAccessPointPolicyForObjectLambdaRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
