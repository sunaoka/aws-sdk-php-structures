<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelName
 * @property string|null $ContentReference
 * @property string|null $CredentialsSecretName
 * @property double|null $FileOffset
 * @property int<0, 2147483647>|null $KantarLicenseId
 * @property string|null $KantarServerUrl
 * @property string|null $LogDestination
 * @property string|null $Metadata3
 * @property string|null $Metadata4
 * @property string|null $Metadata5
 * @property string|null $Metadata6
 * @property string|null $Metadata7
 * @property string|null $Metadata8
 */
class KantarWatermarkSettings extends Shape
{
    /**
     * @param array{
     *     ChannelName?: string|null,
     *     ContentReference?: string|null,
     *     CredentialsSecretName?: string|null,
     *     FileOffset?: double|null,
     *     KantarLicenseId?: int<0, 2147483647>|null,
     *     KantarServerUrl?: string|null,
     *     LogDestination?: string|null,
     *     Metadata3?: string|null,
     *     Metadata4?: string|null,
     *     Metadata5?: string|null,
     *     Metadata6?: string|null,
     *     Metadata7?: string|null,
     *     Metadata8?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
