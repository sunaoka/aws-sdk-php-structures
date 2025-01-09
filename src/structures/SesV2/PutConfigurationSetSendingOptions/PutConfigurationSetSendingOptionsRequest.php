<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetSendingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property bool $SendingEnabled
 */
class PutConfigurationSetSendingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     SendingEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
