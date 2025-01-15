<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property list<Distribution>|null $distributions
 * @property int<30, 720> $timeoutMinutes
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property array<string, string>|null $tags
 */
class DistributionConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     distributions?: list<Distribution>|null,
     *     timeoutMinutes: int<30, 720>,
     *     dateCreated?: string|null,
     *     dateUpdated?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
