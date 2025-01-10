<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebAppCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 * @property string $Title
 * @property string|resource|\Psr\Http\Message\StreamInterface $LogoFile
 * @property string|resource|\Psr\Http\Message\StreamInterface $FaviconFile
 */
class UpdateWebAppCustomizationRequest extends Request
{
    /**
     * @param array{
     *     WebAppId: string,
     *     Title?: string,
     *     LogoFile?: string|resource|\Psr\Http\Message\StreamInterface,
     *     FaviconFile?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
