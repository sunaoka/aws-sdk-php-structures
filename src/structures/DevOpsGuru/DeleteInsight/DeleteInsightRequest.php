<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DeleteInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteInsightRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
