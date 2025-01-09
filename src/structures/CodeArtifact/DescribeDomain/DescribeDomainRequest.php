<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 */
class DescribeDomainRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
