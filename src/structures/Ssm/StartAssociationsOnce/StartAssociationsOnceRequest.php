<?php

namespace Sunaoka\Aws\Structures\Ssm\StartAssociationsOnce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AssociationIds
 */
class StartAssociationsOnceRequest extends Request
{
    /**
     * @param array{AssociationIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
