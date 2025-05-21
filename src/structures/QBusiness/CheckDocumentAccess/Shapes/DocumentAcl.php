<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAclMembership|null $allowlist
 * @property DocumentAclMembership|null $denyList
 */
class DocumentAcl extends Shape
{
    /**
     * @param array{
     *     allowlist?: DocumentAclMembership|null,
     *     denyList?: DocumentAclMembership|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
