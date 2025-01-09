<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateVodSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\HttpPackageConfiguration> $HttpPackageConfigurations
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class UpdateVodSourceRequest extends Request
{
    /**
     * @param array{
     *     HttpPackageConfigurations: list<Shapes\HttpPackageConfiguration>,
     *     SourceLocationName: string,
     *     VodSourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
