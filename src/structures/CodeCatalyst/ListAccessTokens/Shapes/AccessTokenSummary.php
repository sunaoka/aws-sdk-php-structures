<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListAccessTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $expiresTime
 */
class AccessTokenSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     expiresTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
