<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateAvailabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $OrganizationId
 * @property string $DomainName
 * @property Shapes\EwsAvailabilityProvider|null $EwsProvider
 * @property Shapes\LambdaAvailabilityProvider|null $LambdaProvider
 */
class CreateAvailabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
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
