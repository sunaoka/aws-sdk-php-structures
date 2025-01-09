<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FpgaImageId
 * @property string $Name
 * @property string $Description
 * @property list<LoadPermission> $LoadPermissions
 * @property list<ProductCode> $ProductCodes
 */
class FpgaImageAttribute extends Shape
{
    /**
     * @param array{
     *     FpgaImageId?: string,
     *     Name?: string,
     *     Description?: string,
     *     LoadPermissions?: list<LoadPermission>,
     *     ProductCodes?: list<ProductCode>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
