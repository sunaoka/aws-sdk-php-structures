<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 * @property string|null $clientRequestToken
 * @property bool|null $force
 */
class UpdateClusterVersionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version: string,
     *     clientRequestToken?: string|null,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
