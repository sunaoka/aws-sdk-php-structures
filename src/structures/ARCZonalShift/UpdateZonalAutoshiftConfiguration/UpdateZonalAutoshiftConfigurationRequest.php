<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalAutoshiftConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 * @property 'ENABLED'|'DISABLED' $zonalAutoshiftStatus
 */
class UpdateZonalAutoshiftConfigurationRequest extends Request
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     zonalAutoshiftStatus: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
