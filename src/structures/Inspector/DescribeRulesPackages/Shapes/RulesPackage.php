<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeRulesPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property string $provider
 * @property string|null $description
 */
class RulesPackage extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     version: string,
     *     provider: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
