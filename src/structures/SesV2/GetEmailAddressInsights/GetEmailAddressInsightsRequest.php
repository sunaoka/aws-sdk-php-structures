<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailAddressInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 */
class GetEmailAddressInsightsRequest extends Request
{
    /**
     * @param array{EmailAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
