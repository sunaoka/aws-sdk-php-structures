<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateAvailabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $DomainName
 * @property Shapes\EwsAvailabilityProvider|null $EwsProvider
 * @property Shapes\LambdaAvailabilityProvider|null $LambdaProvider
 */
class UpdateAvailabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DomainName: string,
     *     EwsProvider?: Shapes\EwsAvailabilityProvider|null,
     *     LambdaProvider?: Shapes\LambdaAvailabilityProvider|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
