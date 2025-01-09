<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $ConfigurationSet
 * @property string $CreationDate
 * @property bool $Enabled
 * @property string $FromAddress
 * @property bool $HasCredential
 * @property string $Id
 * @property string $Identity
 * @property bool $IsArchived
 * @property string $LastModifiedBy
 * @property string $LastModifiedDate
 * @property int $MessagesPerSecond
 * @property string $Platform
 * @property string $RoleArn
 * @property string $OrchestrationSendingRoleArn
 * @property int $Version
 */
class EmailChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ConfigurationSet?: string,
     *     CreationDate?: string,
     *     Enabled?: bool,
     *     FromAddress?: string,
     *     HasCredential?: bool,
     *     Id?: string,
     *     Identity?: string,
     *     IsArchived?: bool,
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: string,
     *     MessagesPerSecond?: int,
     *     Platform: string,
     *     RoleArn?: string,
     *     OrchestrationSendingRoleArn?: string,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
