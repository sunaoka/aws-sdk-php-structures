<?php

namespace Sunaoka\Aws\Structures\Iam\UntagSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLProviderArn
 * @property list<string> $TagKeys
 */
class UntagSAMLProviderRequest extends Request
{
    /**
     * @param array{
     *     SAMLProviderArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
