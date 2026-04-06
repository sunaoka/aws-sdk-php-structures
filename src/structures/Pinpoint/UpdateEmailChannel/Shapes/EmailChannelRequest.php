<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigurationSet
 * @property bool|null $Enabled
 * @property string $FromAddress
 * @property string $Identity
 * @property string|null $RoleArn
 * @property string|null $OrchestrationSendingRoleArn
 */
class EmailChannelRequest extends Shape
{
    /**
     * @param array{
     *     ConfigurationSet?: string|null,
     *     Enabled?: bool|null,
     *     FromAddress: string,
     *     Identity: string,
     *     RoleArn?: string|null,
     *     OrchestrationSendingRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
