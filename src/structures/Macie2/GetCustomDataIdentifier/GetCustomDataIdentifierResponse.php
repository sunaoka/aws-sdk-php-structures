<?php

namespace Sunaoka\Aws\Structures\Macie2\GetCustomDataIdentifier;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property bool|null $deleted
 * @property string|null $description
 * @property string|null $id
 * @property list<string>|null $ignoreWords
 * @property list<string>|null $keywords
 * @property int|null $maximumMatchDistance
 * @property string|null $name
 * @property string|null $regex
 * @property list<Shapes\SeverityLevel>|null $severityLevels
 * @property array<string, string>|null $tags
 */
class GetCustomDataIdentifierResponse extends Response
{
}
