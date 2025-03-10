<?php

namespace Sunaoka\Aws\Structures\Connect\StartScreenSharing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $InstanceId
 * @property string $ContactId
 */
class StartScreenSharingRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     InstanceId: string,
     *     ContactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
