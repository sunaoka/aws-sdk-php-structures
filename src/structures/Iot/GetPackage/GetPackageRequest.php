<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 */
class GetPackageRequest extends Request
{
    /**
     * @param array{packageName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
