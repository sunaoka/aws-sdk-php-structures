<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointConfigurationForObjectLambda;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 */
class GetAccessPointConfigurationForObjectLambdaRequest extends Request
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
