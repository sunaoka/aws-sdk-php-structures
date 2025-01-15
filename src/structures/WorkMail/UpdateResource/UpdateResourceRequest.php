<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 * @property string|null $Name
 * @property Shapes\BookingOptions|null $BookingOptions
 * @property string|null $Description
 * @property 'ROOM'|'EQUIPMENT'|null $Type
 * @property bool|null $HiddenFromGlobalAddressList
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string,
     *     Name?: string|null,
     *     BookingOptions?: Shapes\BookingOptions|null,
     *     Description?: string|null,
     *     Type?: 'ROOM'|'EQUIPMENT'|null,
     *     HiddenFromGlobalAddressList?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
