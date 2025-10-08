<?php

namespace Sunaoka\Aws\Structures\AIOps\GetInvestigationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetInvestigationGroupRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
