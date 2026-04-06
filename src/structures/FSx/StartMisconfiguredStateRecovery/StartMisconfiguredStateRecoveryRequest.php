<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $FileSystemId
 */
class StartMisconfiguredStateRecoveryRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
