<?php

namespace Sunaoka\Aws\Structures\Macie2\TestCustomDataIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ignoreWords
 * @property list<string>|null $keywords
 * @property int|null $maximumMatchDistance
 * @property string $regex
 * @property string $sampleText
 */
class TestCustomDataIdentifierRequest extends Request
{
    /**
     * @param array{
     *     ignoreWords?: list<string>|null,
     *     keywords?: list<string>|null,
     *     maximumMatchDistance?: int|null,
     *     regex: string,
     *     sampleText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
