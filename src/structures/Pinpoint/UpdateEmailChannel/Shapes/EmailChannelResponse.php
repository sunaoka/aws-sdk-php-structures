<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $ConfigurationSet
 * @property string|null $CreationDate
 * @property bool|null $Enabled
 * @property string|null $FromAddress
 * @property bool|null $HasCredential
 * @property string|null $Id
 * @property string|null $Identity
 * @property bool|null $IsArchived
 * @property string|null $LastModifiedBy
 * @property string|null $LastModifiedDate
 * @property int|null $MessagesPerSecond
 * @property string $Platform
 * @property string|null $RoleArn
 * @property string|null $OrchestrationSendingRoleArn
 * @property int|null $Version
 */
class EmailChannelResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ConfigurationSet?: string|null,
     *     CreationDate?: string|null,
     *     Enabled?: bool|null,
     *     FromAddress?: string|null,
     *     HasCredential?: bool|null,
     *     Id?: string|null,
     *     Identity?: string|null,
     *     IsArchived?: bool|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: string|null,
     *     MessagesPerSecond?: int|null,
     *     Platform: string,
     *     RoleArn?: string|null,
     *     OrchestrationSendingRoleArn?: string|null,
     *     Version?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
