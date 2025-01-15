<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
