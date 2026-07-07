<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceOwnerAccount|null $Account
 * @property ResourceOwnerOrg|null $Org
 */
class ResourceOwner extends Shape
{
    /**
     * @param array{
     *     Account?: ResourceOwnerAccount|null,
     *     Org?: ResourceOwnerOrg|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
