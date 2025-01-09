<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeExclusions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $title
 * @property string $description
 * @property string $recommendation
 * @property list<Scope> $scopes
 * @property list<Attribute> $attributes
 */
class Exclusion extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     title: string,
     *     description: string,
     *     recommendation: string,
     *     scopes: list<Scope>,
     *     attributes?: list<Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
