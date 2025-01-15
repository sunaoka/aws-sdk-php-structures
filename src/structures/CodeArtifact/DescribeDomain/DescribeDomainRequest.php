<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 */
class DescribeDomainRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
