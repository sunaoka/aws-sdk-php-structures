<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteAvailabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $DomainName
 */
class DeleteAvailabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
