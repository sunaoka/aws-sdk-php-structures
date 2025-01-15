<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateFindingsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARCHIVE'|'NOOP' $action
 * @property string|null $clientToken
 * @property string|null $description
 * @property Shapes\FindingCriteria $findingCriteria
 * @property string $name
 * @property int|null $position
 * @property array<string, string>|null $tags
 */
class CreateFindingsFilterRequest extends Request
{
    /**
     * @param array{
     *     action: 'ARCHIVE'|'NOOP',
     *     clientToken?: string|null,
     *     description?: string|null,
     *     findingCriteria: Shapes\FindingCriteria,
     *     name: string,
     *     position?: int|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
