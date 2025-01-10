<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebAppCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $WebAppId
 * @property string $Title
 * @property \Psr\Http\Message\StreamInterface $LogoFile
 * @property \Psr\Http\Message\StreamInterface $FaviconFile
 */
class DescribedWebAppCustomization extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     WebAppId: string,
     *     Title?: string,
     *     LogoFile?: \Psr\Http\Message\StreamInterface,
     *     FaviconFile?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
