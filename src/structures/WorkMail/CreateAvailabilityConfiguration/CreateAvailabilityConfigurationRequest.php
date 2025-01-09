<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateAvailabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $OrganizationId
 * @property string $DomainName
 * @property Shapes\EwsAvailabilityProvider $EwsProvider
 * @property Shapes\LambdaAvailabilityProvider $LambdaProvider
 */
class CreateAvailabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     OrganizationId: string,
     *     DomainName: string,
     *     EwsProvider?: Shapes\EwsAvailabilityProvider,
     *     LambdaProvider?: Shapes\LambdaAvailabilityProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
