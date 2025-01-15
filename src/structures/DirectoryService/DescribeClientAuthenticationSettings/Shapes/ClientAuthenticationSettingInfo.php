<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeClientAuthenticationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SmartCard'|'SmartCardOrPassword'|null $Type
 * @property 'Enabled'|'Disabled'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 */
class ClientAuthenticationSettingInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'SmartCard'|'SmartCardOrPassword'|null,
     *     Status?: 'Enabled'|'Disabled'|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
