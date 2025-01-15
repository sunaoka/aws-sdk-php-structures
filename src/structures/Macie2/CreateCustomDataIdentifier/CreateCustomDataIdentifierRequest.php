<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateCustomDataIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property list<string>|null $ignoreWords
 * @property list<string>|null $keywords
 * @property int|null $maximumMatchDistance
 * @property string $name
 * @property string $regex
 * @property list<Shapes\SeverityLevel>|null $severityLevels
 * @property array<string, string>|null $tags
 */
class CreateCustomDataIdentifierRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     ignoreWords?: list<string>|null,
     *     keywords?: list<string>|null,
     *     maximumMatchDistance?: int|null,
     *     name: string,
     *     regex: string,
     *     severityLevels?: list<Shapes\SeverityLevel>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
