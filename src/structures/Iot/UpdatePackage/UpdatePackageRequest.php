<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string|null $description
 * @property string|null $defaultVersionName
 * @property bool|null $unsetDefaultVersion
 * @property string|null $clientToken
 */
class UpdatePackageRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     description?: string|null,
     *     defaultVersionName?: string|null,
     *     unsetDefaultVersion?: bool|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
