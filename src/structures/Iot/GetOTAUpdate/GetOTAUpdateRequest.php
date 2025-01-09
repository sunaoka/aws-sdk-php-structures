<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $otaUpdateId
 */
class GetOTAUpdateRequest extends Request
{
    /**
     * @param array{otaUpdateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
