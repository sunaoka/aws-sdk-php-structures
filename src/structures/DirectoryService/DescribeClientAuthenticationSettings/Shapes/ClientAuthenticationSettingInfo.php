<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeClientAuthenticationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SmartCard'|'SmartCardOrPassword' $Type
 * @property 'Enabled'|'Disabled' $Status
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 */
class ClientAuthenticationSettingInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'SmartCard'|'SmartCardOrPassword',
     *     Status?: 'Enabled'|'Disabled',
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
