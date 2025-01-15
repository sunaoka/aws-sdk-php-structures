<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetProgrammaticAccessCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessKeyId
 * @property string|null $secretAccessKey
 * @property string|null $sessionToken
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string|null,
     *     secretAccessKey?: string|null,
     *     sessionToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
