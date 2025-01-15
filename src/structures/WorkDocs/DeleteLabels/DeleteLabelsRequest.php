<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string|null $AuthenticationToken
 * @property list<string>|null $Labels
 * @property bool|null $DeleteAll
 */
class DeleteLabelsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     AuthenticationToken?: string|null,
     *     Labels?: list<string>|null,
     *     DeleteAll?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
