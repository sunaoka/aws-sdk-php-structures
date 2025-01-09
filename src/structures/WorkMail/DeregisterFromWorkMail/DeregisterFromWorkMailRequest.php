<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeregisterFromWorkMail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 */
class DeregisterFromWorkMailRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
