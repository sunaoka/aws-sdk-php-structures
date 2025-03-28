<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImageAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $FpgaImageId
 * @property 'description'|'name'|'loadPermission'|'productCodes' $Attribute
 */
class DescribeFpgaImageAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FpgaImageId: string,
     *     Attribute: 'description'|'name'|'loadPermission'|'productCodes'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
