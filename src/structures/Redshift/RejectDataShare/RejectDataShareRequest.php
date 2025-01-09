<?php

namespace Sunaoka\Aws\Structures\Redshift\RejectDataShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataShareArn
 */
class RejectDataShareRequest extends Request
{
    /**
     * @param array{DataShareArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
