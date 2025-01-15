<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageName
 * @property array<string, string>|null $Tags
 */
class CreatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
