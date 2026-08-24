<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFixture;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $fixtureId
 * @property string $name
 * @property string|null $fixtureGroup
 * @property \Aws\Api\DateTimeResult|null $scheduledStart
 * @property string $status
 * @property list<Shapes\Competitor> $competitors
 */
class GetFixtureResponse extends Response
{
}
