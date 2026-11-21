<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $RedirectUris
 * @property string $ClientId
 */
class QuickManagedPublicAuthCodeQuickAuthenticationConfig extends Shape
{
    /**
     * @param array{
     *     RedirectUris: list<string>,
     *     ClientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
