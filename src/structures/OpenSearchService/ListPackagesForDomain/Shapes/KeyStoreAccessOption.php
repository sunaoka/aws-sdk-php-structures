<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListPackagesForDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyAccessRoleArn
 * @property bool $KeyStoreAccessEnabled
 */
class KeyStoreAccessOption extends Shape
{
    /**
     * @param array{
     *     KeyAccessRoleArn?: string,
     *     KeyStoreAccessEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
