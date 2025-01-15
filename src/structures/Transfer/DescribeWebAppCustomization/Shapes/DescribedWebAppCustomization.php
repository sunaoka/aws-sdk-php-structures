<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebAppCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $WebAppId
 * @property string|null $Title
 * @property \Psr\Http\Message\StreamInterface|null $LogoFile
 * @property \Psr\Http\Message\StreamInterface|null $FaviconFile
 */
class DescribedWebAppCustomization extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     WebAppId: string,
     *     Title?: string|null,
     *     LogoFile?: \Psr\Http\Message\StreamInterface|null,
     *     FaviconFile?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
