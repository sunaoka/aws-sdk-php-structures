<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteSAMLProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SAMLProviderArn
 */
class DeleteSAMLProviderRequest extends Request
{
    /**
     * @param array{SAMLProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
