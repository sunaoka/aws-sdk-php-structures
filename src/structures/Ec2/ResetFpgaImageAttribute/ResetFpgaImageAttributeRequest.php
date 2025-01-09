<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetFpgaImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $FpgaImageId
 * @property 'loadPermission' $Attribute
 */
class ResetFpgaImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     FpgaImageId: string,
     *     Attribute?: 'loadPermission'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
