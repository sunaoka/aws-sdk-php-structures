<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListVodSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<HttpPackageConfiguration> $HttpPackageConfigurations
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string $SourceLocationName
 * @property array<string, string>|null $Tags
 * @property string $VodSourceName
 */
class VodSource extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     HttpPackageConfigurations: list<HttpPackageConfiguration>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     SourceLocationName: string,
     *     Tags?: array<string, string>|null,
     *     VodSourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
