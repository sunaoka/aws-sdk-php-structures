<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'autoEnableIO'|'productCodes' $Attribute
 * @property string $VolumeId
 * @property bool $DryRun
 */
class DescribeVolumeAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'autoEnableIO'|'productCodes',
     *     VolumeId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
