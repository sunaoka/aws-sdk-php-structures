<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFpgaImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $FpgaImageId
 */
class DeleteFpgaImageRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FpgaImageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
