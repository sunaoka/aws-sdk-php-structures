<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListDistributionConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property array<string, string> $tags
 * @property list<string> $regions
 */
class DistributionConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     dateCreated?: string,
     *     dateUpdated?: string,
     *     tags?: array<string, string>,
     *     regions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
