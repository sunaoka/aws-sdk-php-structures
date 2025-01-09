<?php

namespace Sunaoka\Aws\Structures\Organizations\UpdateOrganizationalUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationalUnitId
 * @property string $Name
 */
class UpdateOrganizationalUnitRequest extends Request
{
    /**
     * @param array{
     *     OrganizationalUnitId: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
