<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteTargetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetDomainId
 */
class DeleteTargetDomainRequest extends Request
{
    /**
     * @param array{targetDomainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
