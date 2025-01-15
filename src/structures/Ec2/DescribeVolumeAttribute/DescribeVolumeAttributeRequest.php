<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'autoEnableIO'|'productCodes' $Attribute
 * @property string $VolumeId
 * @property bool|null $DryRun
 */
class DescribeVolumeAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute: 'autoEnableIO'|'productCodes',
     *     VolumeId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
