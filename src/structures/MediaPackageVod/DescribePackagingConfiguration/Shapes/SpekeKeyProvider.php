<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionContractConfiguration|null $EncryptionContractConfiguration
 * @property string $RoleArn
 * @property list<string> $SystemIds
 * @property string $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration|null,
     *     RoleArn: string,
     *     SystemIds: list<string>,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
