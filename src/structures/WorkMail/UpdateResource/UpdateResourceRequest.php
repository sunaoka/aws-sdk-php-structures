<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 * @property string $Name
 * @property Shapes\BookingOptions $BookingOptions
 * @property string $Description
 * @property 'ROOM'|'EQUIPMENT' $Type
 * @property bool $HiddenFromGlobalAddressList
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string,
     *     Name?: string,
     *     BookingOptions?: Shapes\BookingOptions,
     *     Description?: string,
     *     Type?: 'ROOM'|'EQUIPMENT',
     *     HiddenFromGlobalAddressList?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
