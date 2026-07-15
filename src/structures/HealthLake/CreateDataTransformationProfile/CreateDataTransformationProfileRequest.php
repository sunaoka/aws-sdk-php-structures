<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateDataTransformationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property Shapes\CreateDataTransformationProfileSource $Source
 * @property string|null $KmsKeyId
 * @property string|null $ProfileDescription
 * @property string $ProfileName
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateDataTransformationProfileRequest extends Request
{
    /**
     * @param array{
     *     SourceFormat: 'CCDA'|'CSV',
     *     Source: Shapes\CreateDataTransformationProfileSource,
     *     KmsKeyId?: string|null,
     *     ProfileDescription?: string|null,
     *     ProfileName: string,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
