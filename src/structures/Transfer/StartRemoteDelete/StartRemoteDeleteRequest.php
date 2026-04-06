<?php

namespace Sunaoka\Aws\Structures\Transfer\StartRemoteDelete;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $DeletePath
 */
class StartRemoteDeleteRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     DeletePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
