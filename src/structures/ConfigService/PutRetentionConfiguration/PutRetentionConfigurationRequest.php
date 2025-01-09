<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRetentionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<30, 2557> $RetentionPeriodInDays
 */
class PutRetentionConfigurationRequest extends Request
{
    /**
     * @param array{RetentionPeriodInDays: int<30, 2557>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
