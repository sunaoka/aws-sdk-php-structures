<?php

namespace Sunaoka\Aws\Structures\WorkMail\TestAvailabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $DomainName
 * @property Shapes\EwsAvailabilityProvider|null $EwsProvider
 * @property Shapes\LambdaAvailabilityProvider|null $LambdaProvider
 */
class TestAvailabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DomainName?: string|null,
     *     EwsProvider?: Shapes\EwsAvailabilityProvider|null,
     *     LambdaProvider?: Shapes\LambdaAvailabilityProvider|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
