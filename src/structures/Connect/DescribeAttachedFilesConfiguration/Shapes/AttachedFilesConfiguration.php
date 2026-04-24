<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAttachedFilesConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property 'EMAIL'|'CHAT'|'CASE'|'TASK' $AttachmentScope
 * @property int<1, 104857600>|null $MaximumSizeLimitInBytes
 * @property ExtensionConfiguration|null $ExtensionConfiguration
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class AttachedFilesConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AttachmentScope: 'EMAIL'|'CHAT'|'CASE'|'TASK',
     *     MaximumSizeLimitInBytes?: int<1, 104857600>|null,
     *     ExtensionConfiguration?: ExtensionConfiguration|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
