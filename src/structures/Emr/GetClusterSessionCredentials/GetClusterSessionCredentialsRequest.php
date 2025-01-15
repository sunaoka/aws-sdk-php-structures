<?php

namespace Sunaoka\Aws\Structures\Emr\GetClusterSessionCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string|null $ExecutionRoleArn
 */
class GetClusterSessionCredentialsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     ExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
