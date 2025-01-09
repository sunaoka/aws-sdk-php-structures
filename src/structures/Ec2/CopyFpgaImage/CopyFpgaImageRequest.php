<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyFpgaImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $SourceFpgaImageId
 * @property string $Description
 * @property string $Name
 * @property string $SourceRegion
 * @property string $ClientToken
 */
class CopyFpgaImageRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SourceFpgaImageId: string,
     *     Description?: string,
     *     Name?: string,
     *     SourceRegion: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
