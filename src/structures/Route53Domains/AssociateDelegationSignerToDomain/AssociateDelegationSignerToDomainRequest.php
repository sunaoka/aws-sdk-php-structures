<?php

namespace Sunaoka\Aws\Structures\Route53Domains\AssociateDelegationSignerToDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\DnssecSigningAttributes $SigningAttributes
 */
class AssociateDelegationSignerToDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SigningAttributes: Shapes\DnssecSigningAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
