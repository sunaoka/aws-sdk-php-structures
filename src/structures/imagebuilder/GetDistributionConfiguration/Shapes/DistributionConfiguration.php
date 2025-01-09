<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property list<Distribution> $distributions
 * @property int<30, 720> $timeoutMinutes
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property array<string, string> $tags
 */
class DistributionConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     distributions?: list<Distribution>,
     *     timeoutMinutes: int<30, 720>,
     *     dateCreated?: string,
     *     dateUpdated?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
