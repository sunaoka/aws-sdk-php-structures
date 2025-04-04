<?php

namespace Sunaoka\Aws\Structures\Iot\DeletePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string|null $clientToken
 */
class DeletePackageRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
