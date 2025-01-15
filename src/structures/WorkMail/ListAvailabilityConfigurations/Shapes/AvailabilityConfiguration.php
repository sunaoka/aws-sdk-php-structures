<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property 'EWS'|'LAMBDA'|null $ProviderType
 * @property RedactedEwsAvailabilityProvider|null $EwsProvider
 * @property LambdaAvailabilityProvider|null $LambdaProvider
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 */
class AvailabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     ProviderType?: 'EWS'|'LAMBDA'|null,
     *     EwsProvider?: RedactedEwsAvailabilityProvider|null,
     *     LambdaProvider?: LambdaAvailabilityProvider|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
