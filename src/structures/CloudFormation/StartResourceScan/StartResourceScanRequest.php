<?php

namespace Sunaoka\Aws\Structures\CloudFormation\StartResourceScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property list<Shapes\ScanFilter>|null $ScanFilters
 */
class StartResourceScanRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     ScanFilters?: list<Shapes\ScanFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
