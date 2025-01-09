<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\CancelStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class CancelStatementRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
