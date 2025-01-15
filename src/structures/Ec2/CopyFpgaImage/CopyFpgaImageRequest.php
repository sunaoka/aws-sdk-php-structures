<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyFpgaImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $SourceFpgaImageId
 * @property string|null $Description
 * @property string|null $Name
 * @property string $SourceRegion
 * @property string|null $ClientToken
 */
class CopyFpgaImageRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SourceFpgaImageId: string,
     *     Description?: string|null,
     *     Name?: string|null,
     *     SourceRegion: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
