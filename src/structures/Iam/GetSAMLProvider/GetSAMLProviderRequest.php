<?php

namespace Sunaoka\Aws\Structures\Iam\GetSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLProviderArn
 */
class GetSAMLProviderRequest extends Request
{
    /**
     * @param array{SAMLProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
