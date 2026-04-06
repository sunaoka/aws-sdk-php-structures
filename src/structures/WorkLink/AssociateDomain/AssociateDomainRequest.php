<?php

namespace Sunaoka\Aws\Structures\WorkLink\AssociateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $DomainName
 * @property string|null $DisplayName
 * @property string $AcmCertificateArn
 */
class AssociateDomainRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     DomainName: string,
     *     DisplayName?: string|null,
     *     AcmCertificateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
