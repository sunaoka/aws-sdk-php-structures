<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateIdentifier
 */
class GetTemplateRequest extends Request
{
    /**
     * @param array{templateIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
