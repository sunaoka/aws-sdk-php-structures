<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFpgaImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $FpgaImageId
 */
class DeleteFpgaImageRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     FpgaImageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
