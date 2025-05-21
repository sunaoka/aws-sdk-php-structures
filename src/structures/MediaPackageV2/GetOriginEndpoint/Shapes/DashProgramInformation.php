<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Source
 * @property string|null $Copyright
 * @property string|null $LanguageCode
 * @property string|null $MoreInformationUrl
 */
class DashProgramInformation extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Source?: string|null,
     *     Copyright?: string|null,
     *     LanguageCode?: string|null,
     *     MoreInformationUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
