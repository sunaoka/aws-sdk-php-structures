<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 */
class GetPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
