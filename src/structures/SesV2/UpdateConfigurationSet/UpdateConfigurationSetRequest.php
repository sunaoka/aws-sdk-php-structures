<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\MessageSecurityOptions|null $MessageSecurityOptions
 */
class UpdateConfigurationSetRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     MessageSecurityOptions?: Shapes\MessageSecurityOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
