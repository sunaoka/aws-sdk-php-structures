<?php

namespace Sunaoka\Aws\Structures\Chime\GetSipMediaApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SipMediaApplicationId
 * @property string $AwsRegion
 * @property string $Name
 * @property list<SipMediaApplicationEndpoint> $Endpoints
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class SipMediaApplication extends Shape
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string,
     *     AwsRegion?: string,
     *     Name?: string,
     *     Endpoints?: list<SipMediaApplicationEndpoint>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
