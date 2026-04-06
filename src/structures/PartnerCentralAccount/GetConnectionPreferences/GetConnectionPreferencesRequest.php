<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetConnectionPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 */
class GetConnectionPreferencesRequest extends Request
{
    /**
     * @param array{Catalog: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
