<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RollbackServiceSoftwareUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class RollbackServiceSoftwareUpdateRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
