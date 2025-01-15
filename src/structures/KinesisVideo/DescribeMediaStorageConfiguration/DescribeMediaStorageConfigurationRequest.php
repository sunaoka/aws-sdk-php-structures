<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMediaStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ChannelName
 * @property string|null $ChannelARN
 */
class DescribeMediaStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChannelName?: string|null,
     *     ChannelARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
