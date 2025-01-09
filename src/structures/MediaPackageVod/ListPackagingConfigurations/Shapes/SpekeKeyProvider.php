<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionContractConfiguration $EncryptionContractConfiguration
 * @property string $RoleArn
 * @property list<string> $SystemIds
 * @property string $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration,
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
