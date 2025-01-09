<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyStoreAccessOption $KeyStoreAccessOption
 */
class PackageAssociationConfiguration extends Shape
{
    /**
     * @param array{KeyStoreAccessOption?: KeyStoreAccessOption} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
