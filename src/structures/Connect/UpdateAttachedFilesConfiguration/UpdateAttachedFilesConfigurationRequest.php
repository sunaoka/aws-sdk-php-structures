<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAttachedFilesConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EMAIL'|'CHAT'|'CASE'|'TASK' $AttachmentScope
 * @property int<1, 104857600>|null $MaximumSizeLimitInBytes
 * @property Shapes\ExtensionConfiguration|null $ExtensionConfiguration
 */
class UpdateAttachedFilesConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AttachmentScope: 'EMAIL'|'CHAT'|'CASE'|'TASK',
     *     MaximumSizeLimitInBytes?: int<1, 104857600>|null,
     *     ExtensionConfiguration?: Shapes\ExtensionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
