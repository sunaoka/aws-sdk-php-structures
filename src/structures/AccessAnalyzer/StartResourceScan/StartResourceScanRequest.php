<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartResourceScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $resourceArn
 * @property string|null $resourceOwnerAccount
 */
class StartResourceScanRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     resourceArn: string,
     *     resourceOwnerAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
