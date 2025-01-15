<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeMitigationAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateDeviceCertificateParams|null $updateDeviceCertificateParams
 * @property UpdateCACertificateParams|null $updateCACertificateParams
 * @property AddThingsToThingGroupParams|null $addThingsToThingGroupParams
 * @property ReplaceDefaultPolicyVersionParams|null $replaceDefaultPolicyVersionParams
 * @property EnableIoTLoggingParams|null $enableIoTLoggingParams
 * @property PublishFindingToSnsParams|null $publishFindingToSnsParams
 */
class MitigationActionParams extends Shape
{
    /**
     * @param array{
     *     updateDeviceCertificateParams?: UpdateDeviceCertificateParams|null,
     *     updateCACertificateParams?: UpdateCACertificateParams|null,
     *     addThingsToThingGroupParams?: AddThingsToThingGroupParams|null,
     *     replaceDefaultPolicyVersionParams?: ReplaceDefaultPolicyVersionParams|null,
     *     enableIoTLoggingParams?: EnableIoTLoggingParams|null,
     *     publishFindingToSnsParams?: PublishFindingToSnsParams|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
