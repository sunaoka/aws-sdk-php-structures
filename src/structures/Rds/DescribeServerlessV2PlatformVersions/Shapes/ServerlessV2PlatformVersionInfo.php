<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeServerlessV2PlatformVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerlessV2PlatformVersion
 * @property string|null $ServerlessV2PlatformVersionDescription
 * @property string|null $Engine
 * @property ServerlessV2FeaturesSupport|null $ServerlessV2FeaturesSupport
 * @property string|null $Status
 * @property bool|null $IsDefault
 */
class ServerlessV2PlatformVersionInfo extends Shape
{
    /**
     * @param array{
     *     ServerlessV2PlatformVersion?: string|null,
     *     ServerlessV2PlatformVersionDescription?: string|null,
     *     Engine?: string|null,
     *     ServerlessV2FeaturesSupport?: ServerlessV2FeaturesSupport|null,
     *     Status?: string|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
