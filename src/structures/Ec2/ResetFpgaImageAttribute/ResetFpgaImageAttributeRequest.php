<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetFpgaImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $FpgaImageId
 * @property 'loadPermission'|null $Attribute
 */
class ResetFpgaImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FpgaImageId: string,
     *     Attribute?: 'loadPermission'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
