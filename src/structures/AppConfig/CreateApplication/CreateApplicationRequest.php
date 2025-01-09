<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
