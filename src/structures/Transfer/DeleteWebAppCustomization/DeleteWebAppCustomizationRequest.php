<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteWebAppCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 */
class DeleteWebAppCustomizationRequest extends Request
{
    /**
     * @param array{WebAppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
