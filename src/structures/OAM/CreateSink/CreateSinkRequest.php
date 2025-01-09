<?php

namespace Sunaoka\Aws\Structures\OAM\CreateSink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateSinkRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
