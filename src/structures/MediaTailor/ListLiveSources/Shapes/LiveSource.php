<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListLiveSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<HttpPackageConfiguration> $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LiveSourceName
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 */
class LiveSource extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     HttpPackageConfigurations: list<HttpPackageConfiguration>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LiveSourceName: string,
     *     SourceLocationName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
