<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxConnectionString;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userArn
 * @property string $environmentId
 * @property string $clusterName
 */
class GetKxConnectionStringRequest extends Request
{
    /**
     * @param array{
     *     userArn: string,
     *     environmentId: string,
     *     clusterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
