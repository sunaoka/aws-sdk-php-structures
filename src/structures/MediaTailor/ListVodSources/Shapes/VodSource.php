<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListVodSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<HttpPackageConfiguration> $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 * @property string $VodSourceName
 */
class VodSource extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     HttpPackageConfigurations: list<HttpPackageConfiguration>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     SourceLocationName: string,
     *     Tags?: array<string, string>,
     *     VodSourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
