<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigurationSet
 * @property bool $Enabled
 * @property string $FromAddress
 * @property string $Identity
 * @property string $RoleArn
 * @property string $OrchestrationSendingRoleArn
 */
class EmailChannelRequest extends Shape
{
    /**
     * @param array{
     *     ConfigurationSet?: string,
     *     Enabled?: bool,
     *     FromAddress: string,
     *     Identity: string,
     *     RoleArn?: string,
     *     OrchestrationSendingRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
