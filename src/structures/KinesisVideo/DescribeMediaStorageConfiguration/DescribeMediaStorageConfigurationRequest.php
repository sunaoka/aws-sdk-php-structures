<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMediaStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property string $ChannelARN
 */
class DescribeMediaStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChannelName?: string,
     *     ChannelARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
