<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateLensVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $LensVersion
 * @property bool|null $IsMajorVersion
 * @property string $ClientRequestToken
 */
class CreateLensVersionRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
     *     LensVersion: string,
     *     IsMajorVersion?: bool|null,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
