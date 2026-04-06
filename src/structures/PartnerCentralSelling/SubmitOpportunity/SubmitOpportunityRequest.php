<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SubmitOpportunity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property 'For Visibility Only'|'Co-Sell' $InvolvementType
 * @property 'Full'|'Limited'|null $Visibility
 */
class SubmitOpportunityRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     InvolvementType: 'For Visibility Only'|'Co-Sell',
     *     Visibility?: 'Full'|'Limited'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
