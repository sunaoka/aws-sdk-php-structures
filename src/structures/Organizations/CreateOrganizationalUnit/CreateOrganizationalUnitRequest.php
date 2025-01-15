<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateOrganizationalUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParentId
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateOrganizationalUnitRequest extends Request
{
    /**
     * @param array{
     *     ParentId: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
