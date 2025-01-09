<?php

namespace Sunaoka\Aws\Structures\CloudFormation\StartResourceScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 */
class StartResourceScanRequest extends Request
{
    /**
     * @param array{ClientRequestToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
