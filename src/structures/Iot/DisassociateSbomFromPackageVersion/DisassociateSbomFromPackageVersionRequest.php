<?php

namespace Sunaoka\Aws\Structures\Iot\DisassociateSbomFromPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $versionName
 * @property string|null $clientToken
 */
class DisassociateSbomFromPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     versionName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
