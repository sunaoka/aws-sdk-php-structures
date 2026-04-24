<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAttachedFilesConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EMAIL'|'CHAT'|'CASE'|'TASK' $AttachmentScope
 */
class DescribeAttachedFilesConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     AttachmentScope: 'EMAIL'|'CHAT'|'CASE'|'TASK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
