<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetSellingSystemSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 */
class GetSellingSystemSettingsRequest extends Request
{
    /**
     * @param array{Catalog: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
