<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DisassociateStreamForSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DisassociateStreamForSegmentsRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
