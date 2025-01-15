<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetBaiduChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $CreationDate
 * @property string $Credential
 * @property bool|null $Enabled
 * @property bool|null $HasCredential
 * @property string|null $Id
 * @property bool|null $IsArchived
 * @property string|null $LastModifiedBy
 * @property string|null $LastModifiedDate
 * @property string $Platform
 * @property int|null $Version
 */
class BaiduChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     CreationDate?: string|null,
     *     Credential: string,
     *     Enabled?: bool|null,
     *     HasCredential?: bool|null,
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
