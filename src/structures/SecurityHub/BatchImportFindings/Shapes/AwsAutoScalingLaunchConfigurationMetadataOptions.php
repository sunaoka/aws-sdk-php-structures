<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpEndpoint
 * @property int $HttpPutResponseHopLimit
 * @property string $HttpTokens
 */
class AwsAutoScalingLaunchConfigurationMetadataOptions extends Shape
{
    /**
     * @param array{
     *     HttpEndpoint?: string,
     *     HttpPutResponseHopLimit?: int,
     *     HttpTokens?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
