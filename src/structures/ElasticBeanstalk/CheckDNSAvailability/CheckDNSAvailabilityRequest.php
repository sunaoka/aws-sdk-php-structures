<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CheckDNSAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CNAMEPrefix
 */
class CheckDNSAvailabilityRequest extends Request
{
    /**
     * @param array{CNAMEPrefix: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
