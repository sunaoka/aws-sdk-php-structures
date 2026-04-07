<?php

namespace Sunaoka\Aws\Structures\S3Files\GetSynchronizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 */
class GetSynchronizationConfigurationRequest extends Request
{
    /**
     * @param array{fileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
