<?php

namespace Sunaoka\Aws\Structures\Emr\ListSecurityConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 */
class ListSecurityConfigurationsRequest extends Request
{
    /**
     * @param array{Marker?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
