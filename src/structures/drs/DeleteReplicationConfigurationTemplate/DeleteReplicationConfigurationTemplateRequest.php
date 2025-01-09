<?php

namespace Sunaoka\Aws\Structures\drs\DeleteReplicationConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationConfigurationTemplateID
 */
class DeleteReplicationConfigurationTemplateRequest extends Request
{
    /**
     * @param array{replicationConfigurationTemplateID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
