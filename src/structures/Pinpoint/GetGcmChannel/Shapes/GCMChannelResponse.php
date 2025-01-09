<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetGcmChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CreationDate
 * @property string $Credential
 * @property string $DefaultAuthenticationMethod
 * @property bool $Enabled
 * @property bool $HasCredential
 * @property bool $HasFcmServiceCredentials
 * @property string $Id
 * @property bool $IsArchived
 * @property string $LastModifiedBy
 * @property string $LastModifiedDate
 * @property string $Platform
 * @property int $Version
 */
class GCMChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     CreationDate?: string,
     *     Credential?: string,
     *     DefaultAuthenticationMethod?: string,
     *     Enabled?: bool,
     *     HasCredential?: bool,
     *     HasFcmServiceCredentials?: bool,
     *     Id?: string,
     *     IsArchived?: bool,
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: string,
     *     Platform: string,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
