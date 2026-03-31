<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property list<string>|null $AllowedUrls
 * @property list<string>|null $DeniedUrls
 */
class UrlRedirectionConfig extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     AllowedUrls?: list<string>|null,
     *     DeniedUrls?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
