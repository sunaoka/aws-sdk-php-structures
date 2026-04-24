<?php

namespace Sunaoka\Aws\Structures\Connect\ListAttachedFilesConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property 'EMAIL'|'CHAT'|'CASE'|'TASK' $AttachmentScope
 * @property int<1, 104857600>|null $MaximumSizeLimitInBytes
 * @property ExtensionConfiguration|null $ExtensionConfiguration
 */
class AttachedFilesConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AttachmentScope: 'EMAIL'|'CHAT'|'CASE'|'TASK',
     *     MaximumSizeLimitInBytes?: int<1, 104857600>|null,
     *     ExtensionConfiguration?: ExtensionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
