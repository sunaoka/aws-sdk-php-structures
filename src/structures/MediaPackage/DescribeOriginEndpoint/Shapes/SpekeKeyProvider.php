<?php

namespace Sunaoka\Aws\Structures\MediaPackage\DescribeOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property EncryptionContractConfiguration $EncryptionContractConfiguration
 * @property string $ResourceId
 * @property string $RoleArn
 * @property list<string> $SystemIds
 * @property string $Url
 */
class SpekeKeyProvider extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     EncryptionContractConfiguration?: EncryptionContractConfiguration,
     *     ResourceId: string,
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
