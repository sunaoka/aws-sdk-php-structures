<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetVdmOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\VdmOptions|null $VdmOptions
 */
class PutConfigurationSetVdmOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     VdmOptions?: Shapes\VdmOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
