<?php

namespace Sunaoka\Aws\Structures\Mobile\DescribeBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bundleId
 * @property string|null $title
 * @property string|null $version
 * @property string|null $description
 * @property string|null $iconUrl
 * @property list<'OSX'|'WINDOWS'|'LINUX'|'OBJC'|'SWIFT'|'ANDROID'|'JAVASCRIPT'>|null $availablePlatforms
 */
class BundleDetails extends Shape
{
    /**
     * @param array{
     *     bundleId?: string|null,
     *     title?: string|null,
     *     version?: string|null,
     *     description?: string|null,
     *     iconUrl?: string|null,
     *     availablePlatforms?: list<'OSX'|'WINDOWS'|'LINUX'|'OBJC'|'SWIFT'|'ANDROID'|'JAVASCRIPT'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
