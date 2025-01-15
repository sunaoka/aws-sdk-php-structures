<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FpgaImageId
 * @property string|null $Name
 * @property string|null $Description
 * @property list<LoadPermission>|null $LoadPermissions
 * @property list<ProductCode>|null $ProductCodes
 */
class FpgaImageAttribute extends Shape
{
    /**
     * @param array{
     *     FpgaImageId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LoadPermissions?: list<LoadPermission>|null,
     *     ProductCodes?: list<ProductCode>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
