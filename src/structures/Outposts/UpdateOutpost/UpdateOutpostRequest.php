<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateOutpost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property string $Name
 * @property string $Description
 * @property 'RACK'|'SERVER' $SupportedHardwareType
 */
class UpdateOutpostRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     Name?: string,
     *     Description?: string,
     *     SupportedHardwareType?: 'RACK'|'SERVER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
