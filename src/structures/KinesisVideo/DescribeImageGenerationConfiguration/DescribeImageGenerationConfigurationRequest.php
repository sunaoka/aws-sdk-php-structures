<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeImageGenerationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 */
class DescribeImageGenerationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
