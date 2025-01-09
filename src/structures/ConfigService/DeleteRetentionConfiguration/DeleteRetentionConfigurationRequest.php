<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRetentionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RetentionConfigurationName
 */
class DeleteRetentionConfigurationRequest extends Request
{
    /**
     * @param array{RetentionConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
