<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<string> $Labels
 * @property string|null $AuthenticationToken
 */
class CreateLabelsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     Labels: list<string>,
     *     AuthenticationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
