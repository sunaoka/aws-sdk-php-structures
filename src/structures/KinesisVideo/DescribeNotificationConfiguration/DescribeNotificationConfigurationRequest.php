<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 */
class DescribeNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
