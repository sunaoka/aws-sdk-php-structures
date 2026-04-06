<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListPartners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $NextToken
 */
class ListPartnersRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
