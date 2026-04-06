<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 * @property string $roleArn
 */
class BasicAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     secretArn: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
