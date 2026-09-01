<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetStreamForSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class GetStreamForSegmentsRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
