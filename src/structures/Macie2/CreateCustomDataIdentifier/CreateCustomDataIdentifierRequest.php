<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateCustomDataIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property list<string> $ignoreWords
 * @property list<string> $keywords
 * @property int $maximumMatchDistance
 * @property string $name
 * @property string $regex
 * @property list<Shapes\SeverityLevel> $severityLevels
 * @property array<string, string> $tags
 */
class CreateCustomDataIdentifierRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     ignoreWords?: list<string>,
     *     keywords?: list<string>,
     *     maximumMatchDistance?: int,
     *     name: string,
     *     regex: string,
     *     severityLevels?: list<Shapes\SeverityLevel>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
