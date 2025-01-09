<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebAppCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 * @property string $Title
 * @property string $LogoFile
 * @property string $FaviconFile
 */
class UpdateWebAppCustomizationRequest extends Request
{
    /**
     * @param array{
     *     WebAppId: string,
     *     Title?: string,
     *     LogoFile?: string,
     *     FaviconFile?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
