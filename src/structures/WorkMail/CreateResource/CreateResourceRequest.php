<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Name
 * @property 'ROOM'|'EQUIPMENT' $Type
 */
class CreateResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Name: string,
     *     Type: 'ROOM'|'EQUIPMENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
