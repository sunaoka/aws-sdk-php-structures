<?php

namespace Sunaoka\Aws\Structures\AppRegistry\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string $clientToken
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
