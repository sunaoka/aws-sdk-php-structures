<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApnsVoipSandboxChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $CreationDate
 * @property string|null $DefaultAuthenticationMethod
 * @property bool|null $Enabled
 * @property bool|null $HasCredential
 * @property bool|null $HasTokenKey
 * @property string|null $Id
 * @property bool|null $IsArchived
 * @property string|null $LastModifiedBy
 * @property string|null $LastModifiedDate
 * @property string $Platform
 * @property int|null $Version
 */
class APNSVoipSandboxChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     CreationDate?: string|null,
     *     DefaultAuthenticationMethod?: string|null,
     *     Enabled?: bool|null,
     *     HasCredential?: bool|null,
     *     HasTokenKey?: bool|null,
     *     Id?: string|null,
     *     IsArchived?: bool|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: string|null,
     *     Platform: string,
     *     Version?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
