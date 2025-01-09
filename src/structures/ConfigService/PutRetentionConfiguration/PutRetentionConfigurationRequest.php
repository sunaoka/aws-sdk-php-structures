<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRetentionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $RetentionPeriodInDays
 */
class PutRetentionConfigurationRequest extends Request
{
    /**
     * @param array{RetentionPeriodInDays: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
