<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateVodSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property string $SourceLocationName
 * @property array<string, string>|null $Tags
 * @property string $VodSourceName
 */
class CreateVodSourceRequest extends Request
{
    /**
     * @param array{
     *     HttpPackageConfigurations: list<Shapes\HttpPackageConfiguration>,
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
