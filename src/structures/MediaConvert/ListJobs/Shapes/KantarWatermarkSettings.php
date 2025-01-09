<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property string $ContentReference
 * @property string $CredentialsSecretName
 * @property double $FileOffset
 * @property int $KantarLicenseId
 * @property string $KantarServerUrl
 * @property string $LogDestination
 * @property string $Metadata3
 * @property string $Metadata4
 * @property string $Metadata5
 * @property string $Metadata6
 * @property string $Metadata7
 * @property string $Metadata8
 */
class KantarWatermarkSettings extends Shape
{
    /**
     * @param array{
     *     ChannelName?: string,
     *     ContentReference?: string,
     *     CredentialsSecretName?: string,
     *     FileOffset?: double,
     *     KantarLicenseId?: int,
     *     KantarServerUrl?: string,
     *     LogDestination?: string,
     *     Metadata3?: string,
     *     Metadata4?: string,
     *     Metadata5?: string,
     *     Metadata6?: string,
     *     Metadata7?: string,
     *     Metadata8?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
