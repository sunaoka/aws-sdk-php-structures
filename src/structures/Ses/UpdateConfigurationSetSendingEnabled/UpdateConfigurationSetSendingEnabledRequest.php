<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetSendingEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property bool $Enabled
 */
class UpdateConfigurationSetSendingEnabledRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
