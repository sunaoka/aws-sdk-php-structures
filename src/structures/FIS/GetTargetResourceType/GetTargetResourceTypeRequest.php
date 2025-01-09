<?php

namespace Sunaoka\Aws\Structures\FIS\GetTargetResourceType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceType
 */
class GetTargetResourceTypeRequest extends Request
{
    /**
     * @param array{resourceType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
