<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Name
 * @property 'ROOM'|'EQUIPMENT' $Type
 * @property string $Description
 * @property bool $HiddenFromGlobalAddressList
 */
class CreateResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Name: string,
     *     Type: 'ROOM'|'EQUIPMENT',
     *     Description?: string,
     *     HiddenFromGlobalAddressList?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
