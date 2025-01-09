<?php

namespace Sunaoka\Aws\Structures\WorkMail\RegisterToWorkMail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string $Email
 */
class RegisterToWorkMailRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     Email: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
