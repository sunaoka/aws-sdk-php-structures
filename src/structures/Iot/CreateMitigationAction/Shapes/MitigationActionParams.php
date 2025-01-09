<?php

namespace Sunaoka\Aws\Structures\Iot\CreateMitigationAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateDeviceCertificateParams $updateDeviceCertificateParams
 * @property UpdateCACertificateParams $updateCACertificateParams
 * @property AddThingsToThingGroupParams $addThingsToThingGroupParams
 * @property ReplaceDefaultPolicyVersionParams $replaceDefaultPolicyVersionParams
 * @property EnableIoTLoggingParams $enableIoTLoggingParams
 * @property PublishFindingToSnsParams $publishFindingToSnsParams
 */
class MitigationActionParams extends Shape
{
    /**
     * @param array{
     *     updateDeviceCertificateParams?: UpdateDeviceCertificateParams,
     *     updateCACertificateParams?: UpdateCACertificateParams,
     *     addThingsToThingGroupParams?: AddThingsToThingGroupParams,
     *     replaceDefaultPolicyVersionParams?: ReplaceDefaultPolicyVersionParams,
     *     enableIoTLoggingParams?: EnableIoTLoggingParams,
     *     publishFindingToSnsParams?: PublishFindingToSnsParams
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
