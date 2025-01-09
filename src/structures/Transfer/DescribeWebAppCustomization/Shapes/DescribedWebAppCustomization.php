<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebAppCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $WebAppId
 * @property string $Title
 * @property string $LogoFile
 * @property string $FaviconFile
 */
class DescribedWebAppCustomization extends Shape
{
    /**
     * @param array{
     *     Arn: string,
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
