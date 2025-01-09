<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DissociatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property string $DomainName
 */
class DissociatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
