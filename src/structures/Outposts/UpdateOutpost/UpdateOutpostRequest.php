<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateOutpost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'RACK'|'SERVER'|null $SupportedHardwareType
 */
class UpdateOutpostRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     SupportedHardwareType?: 'RACK'|'SERVER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
