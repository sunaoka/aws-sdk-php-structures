<?php

namespace Sunaoka\Aws\Structures\Macie2\TestCustomDataIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ignoreWords
 * @property list<string> $keywords
 * @property int $maximumMatchDistance
 * @property string $regex
 * @property string $sampleText
 */
class TestCustomDataIdentifierRequest extends Request
{
    /**
     * @param array{
     *     ignoreWords?: list<string>,
     *     keywords?: list<string>,
     *     maximumMatchDistance?: int,
     *     regex: string,
     *     sampleText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
