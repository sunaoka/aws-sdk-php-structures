<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityConfigurationSetAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string $ConfigurationSetName
 */
class PutEmailIdentityConfigurationSetAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     ConfigurationSetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
