<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $DisplayName
 */
class AzureSubscription extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
