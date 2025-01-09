<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $FileSystemId
 */
class StartMisconfiguredStateRecoveryRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     FileSystemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
