<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateLiveSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property string $LiveSourceName
 * @property string $SourceLocationName
 */
class UpdateLiveSourceRequest extends Request
{
    /**
     * @param array{
     *     HttpPackageConfigurations: list<Shapes\HttpPackageConfiguration>,
     *     LiveSourceName: string,
     *     SourceLocationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
