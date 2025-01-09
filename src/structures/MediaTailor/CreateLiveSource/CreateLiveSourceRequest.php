<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateLiveSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property string $LiveSourceName
 * @property string $SourceLocationName
 * @property array<string, string> $Tags
 */
class CreateLiveSourceRequest extends Request
{
    /**
     * @param array{
     *     HttpPackageConfigurations: list<Shapes\HttpPackageConfiguration>,
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
