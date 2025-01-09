<?php

namespace Sunaoka\Aws\Structures\mgn\GetLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $sourceServerID
 */
class GetLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     sourceServerID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
