<?php

namespace Sunaoka\Aws\Structures\ElementalInference\SearchFixtures\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fixtureId
 * @property string $name
 * @property string|null $fixtureGroup
 * @property \Aws\Api\DateTimeResult|null $scheduledStart
 * @property string $status
 * @property list<Competitor> $competitors
 */
class FixtureSummary extends Shape
{
    /**
     * @param array{
     *     fixtureId: string,
     *     name: string,
     *     fixtureGroup?: string|null,
     *     scheduledStart?: \Aws\Api\DateTimeResult|null,
     *     status: string,
     *     competitors: list<Competitor>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
