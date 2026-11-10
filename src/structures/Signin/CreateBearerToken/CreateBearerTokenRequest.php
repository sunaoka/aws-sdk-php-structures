<?php

namespace Sunaoka\Aws\Structures\Signin\CreateBearerToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantType
 * @property string $resource
 * @property int<300, max>|null $durationSeconds
 */
class CreateBearerTokenRequest extends Request
{
    /**
     * @param array{
     *     grantType: string,
     *     resource: string,
     *     durationSeconds?: int<300, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
