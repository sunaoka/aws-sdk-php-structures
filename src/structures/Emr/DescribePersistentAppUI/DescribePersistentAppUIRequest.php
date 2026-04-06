<?php

namespace Sunaoka\Aws\Structures\Emr\DescribePersistentAppUI;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PersistentAppUIId
 */
class DescribePersistentAppUIRequest extends Request
{
    /**
     * @param array{PersistentAppUIId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
