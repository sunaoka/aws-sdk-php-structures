<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FpgaImageId
 * @property string|null $FpgaImageGlobalId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ShellVersion
 * @property PciId|null $PciId
 * @property FpgaImageState|null $State
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property string|null $OwnerId
 * @property string|null $OwnerAlias
 * @property list<ProductCode>|null $ProductCodes
 * @property list<Tag>|null $Tags
 * @property bool|null $Public
 * @property bool|null $DataRetentionSupport
 * @property list<string>|null $InstanceTypes
 */
class FpgaImage extends Shape
{
    /**
     * @param array{
     *     FpgaImageId?: string|null,
     *     FpgaImageGlobalId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ShellVersion?: string|null,
     *     PciId?: PciId|null,
     *     State?: FpgaImageState|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     OwnerId?: string|null,
     *     OwnerAlias?: string|null,
     *     ProductCodes?: list<ProductCode>|null,
     *     Tags?: list<Tag>|null,
     *     Public?: bool|null,
     *     DataRetentionSupport?: bool|null,
     *     InstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
