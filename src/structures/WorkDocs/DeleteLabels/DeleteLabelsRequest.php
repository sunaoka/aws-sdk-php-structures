<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $AuthenticationToken
 * @property list<string> $Labels
 * @property bool $DeleteAll
 */
class DeleteLabelsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     AuthenticationToken?: string,
     *     Labels?: list<string>,
     *     DeleteAll?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
