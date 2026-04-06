<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteStorageConfigurationRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
