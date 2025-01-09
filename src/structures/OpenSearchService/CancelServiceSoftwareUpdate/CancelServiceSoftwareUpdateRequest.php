<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CancelServiceSoftwareUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class CancelServiceSoftwareUpdateRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
