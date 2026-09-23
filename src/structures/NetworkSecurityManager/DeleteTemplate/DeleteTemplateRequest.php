<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateIdentifier
 */
class DeleteTemplateRequest extends Request
{
    /**
     * @param array{templateIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
