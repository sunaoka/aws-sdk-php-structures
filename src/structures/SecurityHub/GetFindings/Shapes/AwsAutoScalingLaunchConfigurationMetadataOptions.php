<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpEndpoint
 * @property int|null $HttpPutResponseHopLimit
 * @property string|null $HttpTokens
 */
class AwsAutoScalingLaunchConfigurationMetadataOptions extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string|null,
     *     HttpPutResponseHopLimit?: int|null,
     *     HttpTokens?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
