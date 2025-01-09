<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FpgaImageId
 * @property string $FpgaImageGlobalId
 * @property string $Name
 * @property string $Description
 * @property string $ShellVersion
 * @property PciId $PciId
 * @property FpgaImageState $State
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property string $OwnerId
 * @property string $OwnerAlias
 * @property list<ProductCode> $ProductCodes
 * @property list<Tag> $Tags
 * @property bool $Public
 * @property bool $DataRetentionSupport
 * @property list<string> $InstanceTypes
 */
class FpgaImage extends Shape
{
    /**
     * @param array{
     *     FpgaImageId?: string,
     *     FpgaImageGlobalId?: string,
     *     Name?: string,
     *     Description?: string,
     *     ShellVersion?: string,
     *     PciId?: PciId,
     *     State?: FpgaImageState,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     OwnerId?: string,
     *     OwnerAlias?: string,
     *     ProductCodes?: list<ProductCode>,
     *     Tags?: list<Tag>,
     *     Public?: bool,
     *     DataRetentionSupport?: bool,
     *     InstanceTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
