<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactId
 * @property string|null $clientToken
 * @property Shapes\TrackingOverrides|null $trackingOverrides
 * @property string|null $satelliteArn
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     contactId: string,
     *     clientToken?: string|null,
     *     trackingOverrides?: Shapes\TrackingOverrides|null,
     *     satelliteArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
