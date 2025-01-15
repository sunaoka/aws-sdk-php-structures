<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSmsChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $CreationDate
 * @property bool|null $Enabled
 * @property bool|null $HasCredential
 * @property string|null $Id
 * @property bool|null $IsArchived
 * @property string|null $LastModifiedBy
 * @property string|null $LastModifiedDate
 * @property string $Platform
 * @property int|null $PromotionalMessagesPerSecond
 * @property string|null $SenderId
 * @property string|null $ShortCode
 * @property int|null $TransactionalMessagesPerSecond
 * @property int|null $Version
 */
class SMSChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     CreationDate?: string|null,
     *     Enabled?: bool|null,
     *     HasCredential?: bool|null,
     *     Id?: string|null,
     *     IsArchived?: bool|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: string|null,
     *     Platform: string,
     *     PromotionalMessagesPerSecond?: int|null,
     *     SenderId?: string|null,
     *     ShortCode?: string|null,
     *     TransactionalMessagesPerSecond?: int|null,
     *     Version?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
