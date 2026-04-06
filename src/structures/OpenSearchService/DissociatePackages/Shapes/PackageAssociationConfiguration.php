<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DissociatePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyStoreAccessOption|null $KeyStoreAccessOption
 */
class PackageAssociationConfiguration extends Shape
{
    /**
     * @param array{KeyStoreAccessOption?: KeyStoreAccessOption|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
