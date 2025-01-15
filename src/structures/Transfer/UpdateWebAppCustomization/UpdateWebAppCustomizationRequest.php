<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebAppCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 * @property string|null $Title
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $LogoFile
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $FaviconFile
 */
class UpdateWebAppCustomizationRequest extends Request
{
    /**
     * @param array{
     *     WebAppId: string,
     *     Title?: string|null,
     *     LogoFile?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     FaviconFile?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
