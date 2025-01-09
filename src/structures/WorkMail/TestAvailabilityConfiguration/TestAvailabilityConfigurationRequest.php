<?php

namespace Sunaoka\Aws\Structures\WorkMail\TestAvailabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $DomainName
 * @property Shapes\EwsAvailabilityProvider $EwsProvider
 * @property Shapes\LambdaAvailabilityProvider $LambdaProvider
 */
class TestAvailabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DomainName?: string,
     *     EwsProvider?: Shapes\EwsAvailabilityProvider,
     *     LambdaProvider?: Shapes\LambdaAvailabilityProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
