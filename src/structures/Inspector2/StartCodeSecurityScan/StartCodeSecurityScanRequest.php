<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCodeSecurityScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\CodeSecurityResource $resource
 */
class StartCodeSecurityScanRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     resource: Shapes\CodeSecurityResource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
