<?php

namespace Sunaoka\Aws\Structures\Transfer\TestConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 */
class TestConnectionRequest extends Request
{
    /**
     * @param array{ConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
