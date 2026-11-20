<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\CreateSocialConnectionAuthorizationUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property 'FACEBOOK'|'LINKEDIN'|'X' $Platform
 */
class CreateSocialConnectionAuthorizationUrlRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Platform: 'FACEBOOK'|'LINKEDIN'|'X'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
