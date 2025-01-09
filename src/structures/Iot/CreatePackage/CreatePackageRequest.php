<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $description
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     description?: string,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
