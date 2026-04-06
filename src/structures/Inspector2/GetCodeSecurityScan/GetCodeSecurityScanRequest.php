<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CodeSecurityResource $resource
 * @property string $scanId
 */
class GetCodeSecurityScanRequest extends Request
{
    /**
     * @param array{
     *     resource: Shapes\CodeSecurityResource,
     *     scanId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
