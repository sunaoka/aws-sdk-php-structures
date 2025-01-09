<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 * @property string $clientRequestToken
 */
class UpdateClusterVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version: string,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
