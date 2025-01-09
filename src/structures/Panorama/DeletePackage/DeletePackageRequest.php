<?php

namespace Sunaoka\Aws\Structures\Panorama\DeletePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $ForceDelete
 * @property string $PackageId
 */
class DeletePackageRequest extends Request
{
    /**
     * @param array{
     *     ForceDelete?: bool,
     *     PackageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
