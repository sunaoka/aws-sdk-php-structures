<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutInboundDmarcSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property bool $Enforced
 */
class PutInboundDmarcSettingsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Enforced: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
