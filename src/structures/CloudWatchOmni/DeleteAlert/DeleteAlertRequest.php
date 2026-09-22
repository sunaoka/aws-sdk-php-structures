<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $alertId
 */
class DeleteAlertRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     alertId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
