<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAvailabilityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property 'EWS'|'LAMBDA' $ProviderType
 * @property RedactedEwsAvailabilityProvider $EwsProvider
 * @property LambdaAvailabilityProvider $LambdaProvider
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 */
class AvailabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     ProviderType?: 'EWS'|'LAMBDA',
     *     EwsProvider?: RedactedEwsAvailabilityProvider,
     *     LambdaProvider?: LambdaAvailabilityProvider,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateModified?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
