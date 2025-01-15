<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteResourcesByExternalId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $externalId
 */
class DeleteResourcesByExternalIdRequest extends Request
{
    /**
     * @param array{externalId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
