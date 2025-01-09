<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribeRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 */
class DescribeRepositoryRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
