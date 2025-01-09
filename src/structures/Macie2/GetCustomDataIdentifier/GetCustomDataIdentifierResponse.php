<?php

namespace Sunaoka\Aws\Structures\Macie2\GetCustomDataIdentifier;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $deleted
 * @property string $description
 * @property string $id
 * @property list<string> $ignoreWords
 * @property list<string> $keywords
 * @property int $maximumMatchDistance
 * @property string $name
 * @property string $regex
 * @property list<Shapes\SeverityLevel> $severityLevels
 * @property array<string, string> $tags
 */
class GetCustomDataIdentifierResponse extends Response
{
}
