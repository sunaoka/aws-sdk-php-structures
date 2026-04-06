<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 * @property string|null $Name
 * @property Shapes\BookingOptions|null $BookingOptions
 */
class UpdateResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string,
     *     Name?: string|null,
     *     BookingOptions?: Shapes\BookingOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
