<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsMetadataArn
 */
class DeleteOpsMetadataRequest extends Request
{
    /**
     * @param array{OpsMetadataArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
