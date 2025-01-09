<?php

namespace Sunaoka\Aws\Structures\Iot\UpdatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property string $description
 * @property string $defaultVersionName
 * @property bool $unsetDefaultVersion
 * @property string $clientToken
 */
class UpdatePackageRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     description?: string,
     *     defaultVersionName?: string,
     *     unsetDefaultVersion?: bool,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
