<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateSipMediaApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SipMediaApplicationId
 * @property string|null $AwsRegion
 * @property string|null $Name
 * @property list<SipMediaApplicationEndpoint>|null $Endpoints
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class SipMediaApplication extends Shape
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string|null,
     *     AwsRegion?: string|null,
     *     Name?: string|null,
     *     Endpoints?: list<SipMediaApplicationEndpoint>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
