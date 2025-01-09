<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetSecurityControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SecurityControlIds
 */
class BatchGetSecurityControlsRequest extends Request
{
    /**
     * @param array{SecurityControlIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
