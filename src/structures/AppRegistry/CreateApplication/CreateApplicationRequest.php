<?php

namespace Sunaoka\Aws\Structures\AppRegistry\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
