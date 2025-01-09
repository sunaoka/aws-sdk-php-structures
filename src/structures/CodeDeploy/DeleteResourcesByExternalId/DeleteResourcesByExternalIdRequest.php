<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteResourcesByExternalId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $externalId
 */
class DeleteResourcesByExternalIdRequest extends Request
{
    /**
     * @param array{externalId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
