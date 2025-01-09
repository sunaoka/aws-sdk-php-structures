<?php

namespace Sunaoka\Aws\Structures\Organizations\DeleteOrganizationalUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationalUnitId
 */
class DeleteOrganizationalUnitRequest extends Request
{
    /**
     * @param array{OrganizationalUnitId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
