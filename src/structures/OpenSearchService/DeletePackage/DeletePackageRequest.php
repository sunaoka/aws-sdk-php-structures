<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeletePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 */
class DeletePackageRequest extends Request
{
    /**
     * @param array{PackageID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
