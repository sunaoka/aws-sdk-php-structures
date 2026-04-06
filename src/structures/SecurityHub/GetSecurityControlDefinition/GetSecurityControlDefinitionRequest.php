<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecurityControlId
 */
class GetSecurityControlDefinitionRequest extends Request
{
    /**
     * @param array{SecurityControlId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
