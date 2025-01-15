<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property \Aws\Api\DateTimeResult|null $expiresTime
 */
class CreateAccessTokenRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     expiresTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
