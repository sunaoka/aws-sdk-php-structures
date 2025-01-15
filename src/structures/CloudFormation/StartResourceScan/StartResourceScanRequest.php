<?php

namespace Sunaoka\Aws\Structures\CloudFormation\StartResourceScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 */
class StartResourceScanRequest extends Request
{
    /**
     * @param array{ClientRequestToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
