<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateFindingsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARCHIVE'|'NOOP' $action
 * @property string $clientToken
 * @property string $description
 * @property Shapes\FindingCriteria $findingCriteria
 * @property string $name
 * @property int $position
 * @property array<string, string> $tags
 */
class CreateFindingsFilterRequest extends Request
{
    /**
     * @param array{
     *     action: 'ARCHIVE'|'NOOP',
     *     clientToken?: string,
     *     description?: string,
     *     findingCriteria: Shapes\FindingCriteria,
     *     name: string,
     *     position?: int,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
