<?php

namespace Sunaoka\Aws\Structures\Iam\ListOpenIDConnectProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class OpenIDConnectProviderListEntry extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
