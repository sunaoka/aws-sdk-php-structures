<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateBaiduChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CreationDate
 * @property string $Credential
 * @property bool $Enabled
 * @property bool $HasCredential
 * @property string $Id
 * @property bool $IsArchived
 * @property string $LastModifiedBy
 * @property string $LastModifiedDate
 * @property string $Platform
 * @property int $Version
 */
class BaiduChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     CreationDate?: string,
     *     Credential: string,
     *     Enabled?: bool,
     *     HasCredential?: bool,
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
