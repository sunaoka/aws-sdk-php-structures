<?php

namespace Sunaoka\Aws\Structures\DirectConnect\StopBgpFailoverTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualInterfaceId
 */
class StopBgpFailoverTestRequest extends Request
{
    /**
     * @param array{virtualInterfaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
