<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSmsChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CreationDate
 * @property bool $Enabled
 * @property bool $HasCredential
 * @property string $Id
 * @property bool $IsArchived
 * @property string $LastModifiedBy
 * @property string $LastModifiedDate
 * @property string $Platform
 * @property int $PromotionalMessagesPerSecond
 * @property string $SenderId
 * @property string $ShortCode
 * @property int $TransactionalMessagesPerSecond
 * @property int $Version
 */
class SMSChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     CreationDate?: string,
     *     Enabled?: bool,
     *     HasCredential?: bool,
     *     Id?: string,
     *     IsArchived?: bool,
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: string,
     *     Platform: string,
     *     PromotionalMessagesPerSecond?: int,
     *     SenderId?: string,
     *     ShortCode?: string,
     *     TransactionalMessagesPerSecond?: int,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
